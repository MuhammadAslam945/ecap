<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class ActiveTripListComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.active-trip-list-component')->layout('layouts.admin.base');
    }
}
