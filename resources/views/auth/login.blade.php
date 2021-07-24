@extends('layouts.app')

@section('content')
<head>
  	<title>Login 10</title>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="css/login/style.css">
</head>
<body class="img js-fullheight" style="background-image: url(images/slide_2.jpg);">
<section class="ftco-section">
<div class="container">
    <div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Login </h2>
				</div>
			</div>
            <div class="row justify-content-center">
				<div class="col-md-8 col-lg-6">
					<div class="login-wrap p-0">
		      	    <h3 class="mb-4 text-center">Have an account?</h3>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        
                        <div class="form-group row">
                            <label style="color: #fff" for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label style="color: #fff" for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <span toggle="#password-field" class="fa fa-fw fa-eye field-icon toggle-password"></span>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row justify-content-center">
                            <div class="col-md-6 text-center mb-5">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                               
                            </div>
                        </div>
                        
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                    @if (Route::has('password.request'))
                                    <a class="btn btn-link" style="color: #fff" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif 
                                </div>
                                
                            </div>
                        </div>

                    </form>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<script src="js/login/jquery.min.js"></script>
  <script src="js/login/popper.js"></script>
  <script src="js/login/bootstrap.min.js"></script>
  <script src="js/login/main.js"></script>
</body>
@endsection
