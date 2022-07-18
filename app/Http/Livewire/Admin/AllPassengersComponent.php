<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AllPassengersComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.all-passengers-component')->layout('layouts.admin.base');
    }
}
