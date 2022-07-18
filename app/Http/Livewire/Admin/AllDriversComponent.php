<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AllDriversComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.all-drivers-component')->layout('layouts.admin.base');
    }
}
