<?php

namespace App\Http\Livewire\Dashboard\Menus;

use App\Models\Configuration;
use App\Models\Menu;
use Livewire\Component;

class Edit extends Component
{
    public $name;
    public $action;
    public $icon;
    public $color;
    public $order;
    public $company_website;
    public $menu;

    protected $rules = [
        'name' => 'required|string|max:255',
        'action' => 'required|string|max:255',
        'icon' => 'required|string|max:255',
        'color' => 'required|string|max:255',
        'order' => 'required|integer',
    ];

    public function mount(Menu $menu)
    {
        $this->name = $menu->name;
        $this->action = $menu->action;
        $this->icon = $menu->icon;
        $this->color = $menu->color;
        $this->order = $menu->order;
        $this->company_website = Configuration::where('key', 'company_website')->first()->value;
        $this->menu = $menu;
    }

    public function submit(){
        $this->validate($this->rules);
        $this->menu->update([
            'name' => $this->name,
            'action' => $this->action,
            'icon' => $this->icon,
            'color' => $this->color,
            'order' => $this->order,
        ]);

        return redirect()->route('dashboard.menus.index')
        ->with('message', 'Menu atualizado com sucesso!')
        ->with('type', 'success');
    }

    public function render()
    {
        return view('livewire.dashboard.menus.edit');
    }
}
