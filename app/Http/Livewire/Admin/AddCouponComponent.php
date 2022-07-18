<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class AddCouponComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.add-coupon-component')->layout('layouts.admin.base');
    }
}
