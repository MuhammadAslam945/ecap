<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class BookedTripListComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.booked-trip-list-component')->layout('layouts.admin.base');
    }
}
