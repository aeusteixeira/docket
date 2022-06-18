<?php

namespace App\Http\Livewire\Dashboard\Menus;

use App\Models\Configuration;
use App\Models\Menu;
use Livewire\Component;

class Create extends Component
{
    public $name;
    public $action;
    public $icon;
    public $color;
    public $order;
    public $company_website;
    public $menus;

    protected $rules = [
        'name' => 'required|string|max:255',
        'action' => 'required|string|max:255',
        'icon' => 'required|string|max:255',
        'color' => 'required|string|max:255',
        'order' => 'required|integer',
    ];

    public function mount()
    {
        $this->name = 'Suporte';
        $this->action = '';
        $this->icon = 'fas fa-headset';
        $this->color = '#000b76';
        $this->order = '';
        $this->company_website = Configuration::where('key', 'company_website')->first()->value;
        $this->menus = Menu::all();
    }

    public function submit(){
        $this->validate($this->rules);
        Menu::create([
            'name' => $this->name,
            'action' => $this->action,
            'icon' => $this->icon,
            'color' => $this->color,
            'order' => $this->order,
        ]);

        return redirect()->route('dashboard.menus.index')
        ->with('message', 'Menu criado com sucesso!')
        ->with('type', 'success');
    }

    public function render()
    {
        return view('livewire.dashboard.menus.create');
    }
}
