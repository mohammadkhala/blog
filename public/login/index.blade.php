@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login V1</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{isset(vendor/bootstrap/css/bootstrap.min.css)}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{isset(fonts/font-awesome-4.7.0/css/font-awesome.min.css)}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{isset(vendor/animate/animate.css)}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{isset(vendor/css-hamburgers/hamburgers.min.css)}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{isset(vendor/select2/select2.min.css)}}">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="images/img-01.png" alt="IMG">
				</div>

				<form method="POST" action="{{route('login')}}" class="login100-form validate-form">
					@csrf
                    <span class="login100-form-title">
						Member Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						@error('email')

                        @enderror
                        <input class="input100" type="text" name="email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-envelope" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						@error('password')

                        @enderror
                        <input class="input100" type="password" name="pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<div class="text-center p-t-12">
						<span class="txt1">
							Forgot
						</span>
                        @if (Route::)

                        @endif
						<a class="txt2" href="#">
							Username / Password?
						</a>
					</div>

					<div class="text-center p-t-136">
						<a class="txt2" href="#">
							Create your Account
							<i class="fa fa-long-arrow-right m-l-5" aria-hidden="true"></i>
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>




<!--===============================================================================================-->
	<script src="{{isset(vendor/jquery/jquery-3.2.1.min.js)}}"></script>
<!--===============================================================================================-->
	<script src="{{isset(vendor/bootstrap/js/popper.js)}}"></script>
	<script src="{{isset(vendor/bootstrap/js/bootstrap.min.js)}}"></script>
<!--===============================================================================================-->
	<script src="{{isset(vendor/select2/select2.min.js)}}"></script>
<!--===============================================================================================-->
	<script src="{{isset(vendor/tilt/tilt.jquery.min.js)}}"></script>
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
@endsection
