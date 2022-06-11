<?php

namespace App\Http\Livewire\Dashboard\Contents;
use Livewire\WithFileUploads;

use App\Models\{
    Content,
    CallToAction,
    Section,
    Type
};
use Illuminate\Support\Facades\Storage;
use Livewire\Component;

class Create extends Component
{
    use WithFileUploads;

    public $name;
    public $content;
    public $image;
    public $call_to_action_id;
    public $section_id;
    public $type_id;
    public $action;

    public $isCard = true;
    public $isBanner = false;
    public $isPopUp = false;
    public $hasCTA = false;
    public $call_to_action_name;
    public $call_to_action_color;

    public $call_to_actions;
    public $sections;
    public $types;

    protected $rules = [
        'name' => 'required|string|max:255',
        'content' => 'required|string|max:255',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'call_to_action_id' => 'nullable|exists:call_to_actions,id',
        'section_id' => 'nullable|integer',
        'type_id' => 'required|integer',
        'action' => 'nullable|max:255',
    ];

    public function updated($field)
    {
        $this->validateOnly($field, $this->rules);
    }

    public function updatedTypeId()
    {
        if ($this->type_id == 1) {
            $this->isCard = true;
            $this->isBanner = false;
            $this->isPopUp = false;
        } elseif ($this->type_id == 2) {
            $this->isBanner = true;
            $this->isCard = false;
            $this->isPopUp = false;
        } elseif ($this->type_id == 3) {
            $this->isPopUp = true;
            $this->isCard = false;
            $this->isBanner = false;
            $this->image = null;
        }
    }

    function updatedCallToActionId()
    {
        $call_to_action = CallToAction::find($this->call_to_action_id);
        $this->call_to_action_name = $call_to_action->name;
        $this->call_to_action_color = $call_to_action->color;

    }

    public function updatedImage()
    {
        if ($this->image) {
            $this->image = Storage::disk('public')->put('contents', $this->image);
        }
    }

    public function submit()
    {
        sleep(2);
        $this->validate($this->rules);

        $content = Content::create([
            'name' => $this->name,
            'content' => $this->content,
            'image' => $this->image,
            'call_to_action_id' => $this->call_to_action_id,
            'section_id' => $this->section_id,
            'type_id' => $this->type_id,
            'action' => $this->action,
        ]);

        $this->resetInput();

        return redirect()->route('dashboard.contents.index')
        ->with('message', 'Conteúdo criado com sucesso!')
        -> with('type', 'success');
    }

    public function resetInput()
    {
        $this->name = null;
        $this->content = null;
        $this->image = null;
        $this->call_to_action_id = null;
        $this->section_id = null;
        $this->type_id = null;
    }

    public function mount()
    {
        $this->call_to_actions = CallToAction::all();
        $this->sections = Section::all();
        $this->types = Type::all();
    }

    public function render()
    {
        return view('livewire.dashboard.contents.create');
    }
}
