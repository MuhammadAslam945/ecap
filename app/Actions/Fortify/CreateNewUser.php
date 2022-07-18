<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;
use Carbon\Carbon;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Request;
class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;
    use WithFileUploads;
    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone'=>'required|unique:users',
            'profile_photo_path' => 'mimes:jpg',
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();
      
            $image = $input['profile_photo_path'];
            $imagename=Carbon::now()->timestamp.'.'.$image->extension();
            $image->storeAs('assests/images/users',$imagename);
            //$imagesname=$imagesname.','.$imagename;
        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'phone'=>$input['phone'],
            'profile_photo_path'=>$imagename,
            'password' => Hash::make($input['password']),
            
        ]);
       
    }
}
