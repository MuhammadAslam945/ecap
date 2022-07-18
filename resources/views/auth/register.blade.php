<x-base-layout>
<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
            <x-jet-validation-errors class="mb-4" />

             <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
               @csrf>
					<span class="login100-form-logo">
						<img alt="" src="{{asset('assets/images/taxi.png')}}">
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Registration
					</span>
					<div class="row">
						<div class="col-lg-6 p-t-20">
							<div class="wrap-input100 validate-input" data-validate="Enter username">
								<input class="input100" type="text" name="name" placeholder="Enter Name" :value="old('name')" required autofocus autocomplete="name">
								
							</div>
						</div>
						<div class="col-lg-6 p-t-20">
							<div class="wrap-input100 validate-input" data-validate="Enter email">
								<input class="input100" type="email" name="email" placeholder="Email" :value="old('email')" required>
								
							</div>
						</div>
                        <div class="col-lg-6 p-t-20">
							<div class="wrap-input100 validate-input" data-validate="Enter mobile">
								<input class="input100" type="text" name="phone" placeholder="Mobile Number" required>
								
							</div>
						</div>
						<div class="col-lg-6 p-t-20">
							<div class="wrap-input100 validate-input" >
								<input class="input100" type="file" name="profile_photo_path" required>
								
							</div>
						</div>
						<div class="col-lg-6 p-t-20">
							<div class="wrap-input100 validate-input" data-validate="Enter password">
								<input class="input100" type="password" name="password" placeholder="password" required autocomplete="new-password">
								
							</div>
						</div>
						<div class="col-lg-6 p-t-20">
							<div class="wrap-input100 validate-input" data-validate="Enter password again">
								<input class="input100" type="password" name="password_confirmation" placeholder="confirm password" required autocomplete="new-password">
								
							</div>
						</div>
					</div>
					
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Sign In
						</button>
					</div>
					<div class="text-center p-t-50">
						<a class="txt1" href="{{ route('login') }}">
							You already have a membership?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</x-base-layout>
