<?php

namespace App\Http\Livewire\Dashboard\Emails;

use App\Jobs\newCommunique;
use App\Mail\Pattern;
use App\Models\Email;
use App\Models\Group;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;

    public $title;
    public $body;
    public $groups;
    public $groupsSelected = [];
    public $groupsNames = '';

    public $hasAttachment = false;
    public $attachment;

    public $imagePreview = 'https://i.postimg.cc/KvTRMxrd/HEADER-EMAIL-DE-COMUNICADO.png';
    public $hasImage = false;
    public $image;

    public $hasCTA = false;
    public $callToAction;
    public $ctaURL;

    protected $rules = [
        'title' => 'required|min:3',
        'body' => 'required|min:3',
        'attachment' => 'nullable|mimes:doc,docx,xls,xlsx,ppt,pptx,pdf,zip,rar',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'callToAction' => 'nullable|min:3',
        'ctaURL' => 'nullable|url',
    ];

    public function mount()
    {
        $this->title = '💡 Dicas de Segurança: o que é Phishing?';
        $this->body = 'O Phishing é um tipo de ataque que consiste em tentar enganar o usuário para que ele realize uma ação que não deveria ser executada. O ataque é realizado por meio de uma máscara de identificação, que é um nome de usuário ou um endereço de e-mail que é usado para tentar identificar o usuário.';
        $this->groups = Group::all();
    }

    public function updatedGroupsSelected($value)
    {
        $this->groupsNames = $this->groups->whereIn('id', $value)->pluck('name');
    }

    public function submit()
    {
        $this->validate();

        $email = Email::create([
            'title' => $this->title,
            'body' => $this->body,
            'attachment' => ($this->hasAttachment) ? $this->attachment->store('emails/attachments') : null,
            'image' => Storage::disk('public')->put('emails', $this->image),
            'call_to_action' => $this->callToAction,
            'cta_link' => $this->ctaURL,
        ]);

        $email->groups()->attach($this->groupsSelected);

        newCommunique::dispatch($email)->delay(now()->addSeconds(5));

        return redirect()->route('dashboard.emails.index')
        ->with('message', 'O e-mail foi enviado com sucesso!')
        ->with('type', 'success');
    }

    public function render()
    {
        return view('livewire.dashboard.emails.create');
    }
}
