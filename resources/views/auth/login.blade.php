
<x-base-layout>
<div class="limiter">
		<div class="container-login100 page-background">
			<div class="wrap-login100">
            <x-jet-validation-errors class="mb-4" />
				<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
				@csrf
					<span class="login100-form-logo">
						<img alt="" src="{{asset('assets/images/taxi.png')}}">
					</span>
					<span class="login100-form-title p-b-34 p-t-27">
						Log in
					</span>
					<div class="wrap-input100 validate-input" data-validate="Enter username">
						<input class="input100" type="text" name="email" placeholder="email">
						
					</div>
					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>
					<div class="text-center p-t-50">
						<a class="txt1" href="{{ route('password.request') }}">
							Forgot Password?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</x-base-layout>
