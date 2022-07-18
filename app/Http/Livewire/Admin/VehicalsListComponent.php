<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class VehicalsListComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.vehicals-list-component')->layout('layouts.admin.base');
    }
}
