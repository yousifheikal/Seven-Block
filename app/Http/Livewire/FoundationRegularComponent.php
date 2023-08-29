<?php

namespace App\Http\Livewire;

use Livewire\Component;

class FoundationRegularComponent extends Component
{
    public function render()
    {
        return view('livewire.foundation-regular-component')->layout('layout.base');
    }
}
