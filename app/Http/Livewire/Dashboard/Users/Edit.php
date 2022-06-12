<?php

namespace App\Http\Livewire\Dashboard\Users;

use App\Models\Group;
use App\Models\User;
use Livewire\Component;

class Edit extends Component
{
    public $user;
    public $name;
    public $email;
    public $password;
    public $group_id;
    public $isAdmin = true;

    public $groups;

    protected $rules = [
        'name' => 'required|string|max:255',
        'password' => 'nullable|string|min:6',
        'group_id' => 'nullable|integer|exists:groups,id',
        'isAdmin' => 'nullable|boolean',
    ];

    public function submit(){
        sleep(2);
        $this->validate($this->rules);

        $this->user->name = $this->name;
        $this->user->group_id = $this->group_id;
        $this->user->is_admin = $this->isAdmin;
        $this->user->save();
        return redirect()->route('dashboard.users.index')
        ->with('message', 'Usuário atualizado com sucesso!')
        ->with('type', 'success');
    }

    public function mount(User $user){
        $this->name = $user->name;
        $this->email = $user->email;
        //$this->password = $user->password;
        $this->group_id = $user->group_id;
        $this->isAdmin = $user->is_admin;

        $this->groups = Group::all();
    }

    public function render()
    {
        return view('livewire.dashboard.users.edit');
    }
}
