<?php

namespace App\View\Components;

use Illuminate\View\Component;

class ActionsButtons extends Component
{

    public $id;
    public $route;
    public $name;
    public $type;
    public $color;
    public $icon;
    public $method;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($id, $route, $name, $type, $color, $icon, $method)
    {
        $this->id = $id;
        $this->route = $route;
        $this->name = $name;
        $this->type = $type;
        $this->color = $color;
        $this->icon = $icon;
        $this->method = $method;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.actions-buttons');
    }
}
