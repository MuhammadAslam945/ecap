<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class CompletedTripListComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.completed-trip-list-component')->layout('layouts.admin.base');
    }
}
