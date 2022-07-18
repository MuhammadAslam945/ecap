<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AddDriverComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.add-driver-component')->layout('layouts.admin.base');
    }
}
