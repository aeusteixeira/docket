<?php

namespace App\View\Components;

use Illuminate\View\Component;

class HeaderButtons extends Component
{
    public $context;
    public $actions = [];

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($context, $actions = [])
    {
        $this->context = $context;
        $this->actions = $actions;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.header-buttons');
    }
}
