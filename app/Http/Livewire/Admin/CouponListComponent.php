<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class CouponListComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.coupon-list-component')->layout('layouts.admin.base');
    }
}
