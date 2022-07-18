<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Admin\AdminDashboardComponent;
use App\Http\Livewire\Admin\ActiveTripListComponent;
use App\Http\Livewire\Admin\CompletedTripListComponent;
use App\Http\Livewire\Admin\BookedTripListComponent;
use App\Http\Livewire\Admin\RouteMapComponent;
use App\Http\Livewire\Admin\AddDriverComponent;
use App\Http\Livewire\Admin\AllDriversComponent;
use App\Http\Livewire\Admin\DriversPAymentComponent;
use App\Http\Livewire\Admin\AllPassengersComponent;
use App\Http\Livewire\Admin\AddVehicalComponent;
use App\Http\Livewire\Admin\VehicalsListComponent;
use App\Http\Livewire\Admin\EditVehicalComponent;
use App\Http\Livewire\Admin\AddCouponComponent;
use App\Http\Livewire\Admin\CouponListComponent;
use App\Http\Livewire\Admin\AddFareComponent;
use App\Http\Livewire\Admin\FareListComponent;
use App\Http\Livewire\Admin\AdminProfileComponent;
use App\Http\Livewire\User\UserProfileComponent;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('auth.login');
});
Route::middleware(['auth:sanctum', 'verified'])->group( function () {

});

// ADM
Route::middleware(['auth:sanctum', 'verified','authadmin'])->group( function () {
    Route::get("/admin/dashboard",AdminDashboardComponent::class)->name("admin.dashboard");
    Route::get('/admin/view/active/trip/list',ActiveTripListComponent::class)->name('admin.activetrip');
    Route::get('/admin/view/completed/trip',CompletedTripListComponent::class)->name('admin.completedtrip');
    Route::get('/admin/view/booked/trip',BookedTripListComponent::class)->name('admin.bookedtrip');
    Route::get('/admin/view/all/route/maps',RouteMapComponent::class)->name('admin.routemap');
    Route::get('/admin/add/driver',AddDriverComponent::class)->name('admin.adddriver');
    Route::get('/admin/all/drivers',AllDriversComponent::class)->name('admin.drivers');
    Route::get('/admin/drivers/payment',DriversPAymentComponent::class)->name('admin.driverspayment');
    Route::get('/admin/view/all/passengers',AllPassengersComponent::class)->name('admin.allpassengers');
    Route::get('/admin/add/vehical',AddVehicalComponent::class)->name('admin.addvehical');
    Route::get('/admin/view/vehical/list',VehicalsListComponent::class)->name('admin.vehicallist');
    Route::get('/admin/edit/vehical/{id}',EditVehicalComponent::class)->name('admin.editvehical');
    Route::get('/admin/add/coupon',AddCouponComponent::class)->name('admin.addcoupon');
    Route::get('/admin/view/coupon/list',CouponListComponent::class)->name('admin.couponlist');
    Route::get('/admin/add/fare',AddFareComponent::class)->name('admin.addfare');
    Route::get('/admin/view/fare/list',FareListComponent::class)->name('admin.farelist');
    Route::get('admin/profile',AdminProfileComponent::class)->name('admin.profile');
});