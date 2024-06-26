<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pesi - Reset Password</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="{{ asset('/img/favicon.png') }}"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" {{ asset('/masuk/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/masuk/fonts/font-awesome-4.7.0/css/font-awesome.min.css ') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/masuk/fonts/Linearicons-Free-v1.0.0/icon-font.min.css ') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/masuk/vendor/animate/animate.css ') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href=" {{ asset('/masuk/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/masuk/vendor/animsition/css/animsition.min.css ') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/masuk/vendor/select2/select2.min.css ') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/masuk/vendor/daterangepicker/daterangepicker.css ') }}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('/masuk/css/util.css ') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('/masuk/css/main.css ') }}">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-form-title" style="background-image: url('{{ asset('masuk/images/bg-03.jpg') }}');">
					<span class="login100-form-title-1">
						RESET PASSWORD
					</span>
				</div>

				<form class="login100-form validate-form" action="{{ route('password.update') }}" method="POST">
				@csrf
					<input type="hidden" name="token" value="{{ $request->route('token') }}">

					<div class="wrap-input100 validate-input m-b-26" data-validate="Email is required">
						<span class="label-input100">Email</span>
						<input placeholder="Masukkan alamat email" id="email" class="block mt-1 w-full input100" type="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Password</span>
						<input placeholder="Masukkan password" id="password" class="block mt-1 w-full input100" type="password" name="password" required autocomplete="new-password">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-18" data-validate = "Password is required">
						<span class="label-input100">Konfirmasi Password</span>
						<input placeholder="Masukkan ulang password" id="password_confirmation" class="block mt-1 w-full input100" type="password" name="password_confirmation" required autocomplete="new-password">
						<span class="focus-input100"></span>
					</div>
						

					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit" name="submit">
							{{ __('Reset Password') }}
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src=" {{ asset('/masuk/vendor/jquery/jquery-3.2.1.min.js ') }}"></script>
<!--===============================================================================================-->
	<script src=" {{ asset('/masuk/vendor/animsition/js/animsition.min.js ') }}"></script>
<!--===============================================================================================-->
	<script src=" {{ asset('/masuk/vendor/bootstrap/js/popper.js ') }}"></script>
	<script src=" {{ asset('/masuk/vendor/bootstrap/js/bootstrap.min.js ') }}"></script>
<!--===============================================================================================-->
	<script src=" {{ asset('/masuk/vendor/select2/select2.min.js ') }}"></script>
<!--===============================================================================================-->
	<script src=" {{ asset('/masuk/vendor/daterangepicker/moment.min.js ') }}"></script>
	<script src=" {{ asset('/masuk/vendor/daterangepicker/daterangepicker.js ') }}"></script>
<!--===============================================================================================-->
	<script src=" {{ asset('/masuk/vendor/countdowntime/countdowntime.js ') }}"></script>
<!--===============================================================================================-->
	<script src=" {{ asset('/masuk/js/main.js') }}"></script>

</body>
</html>
