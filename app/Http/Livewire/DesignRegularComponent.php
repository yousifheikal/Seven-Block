<?php

namespace App\Http\Livewire;

use Livewire\Component;

class DesignRegularComponent extends Component
{
    public function render()
    {
        return view('livewire.design-regular-component')->layout('layout.base');
    }
}
