<?php

namespace App\Http\Livewire\Dashboard\Contents;

use Livewire\Component;

class Preview extends Component
{
    public $data;

    public function render()
    {
        return view('livewire.dashboard.contents.preview');
    }
}
