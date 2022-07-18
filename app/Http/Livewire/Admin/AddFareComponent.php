<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AddFareComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.add-fare-component')->layout('layouts.admin.base');
    }
}
