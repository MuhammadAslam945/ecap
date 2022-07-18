
<x-base-layout>
<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
            <x-jet-validation-errors class="mb-4" />

            <form method="POST" action="{{ route('password.email') }}"> 
                @csrf
					<span class="login100-form-logo">
						<img alt="" src="{{asset('assets/images/taxi.png')}}">
					</span>
					<p class="text-center txt-small-heading">
						Forgot Your Password? Let Us Help You.
					</p>
					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="email" name="email" :value="old('email')" required autofocus
							placeholder="Enter Your Register Email Address">
						
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Send
						</button>
					</div>
					<div class="text-center p-t-27">
						<a class="txt1" href="{{route('login')}}">
							Login?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</x-base-layout>