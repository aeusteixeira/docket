<?php

namespace App\Http\Livewire\Dashboard\Users;

use App\Models\Group;
use App\Models\User;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $email;
    public $password;
    public $group_id;
    public $isAdmin = true;

    public $groups;

    protected $rules = [
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'nullable|string|min:6',
        'group_id' => 'nullable|integer|exists:groups,id',
        'isAdmin' => 'nullable|boolean',
    ];

    public function submit(){
        sleep(2);
        $user = $this->validate($this->rules);
        //dd($user);

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
            'group_id' => $this->group_id,
            'is_admin' => $this->isAdmin,
        ]);

        return redirect()->route('dashboard.users.index')
        ->with('message', 'Usuário criado com sucesso!')
        ->with('type', 'success');
    }

    public function mount(){
        $this->groups = Group::all();
    }

    public function render()
    {
        return view('livewire.dashboard.users.create');
    }

}
