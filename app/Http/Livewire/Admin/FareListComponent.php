<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class FareListComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.fare-list-component')->layout('layouts.admin.base');
    }
}
