<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AddVehicalComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.add-vehical-component')->layout('layouts.admin.base');
    }
}
