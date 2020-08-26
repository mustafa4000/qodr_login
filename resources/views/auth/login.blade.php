
@section('pageTitle', 'Login')

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Dashboard</title> --}}
 
    <!-- begin::global styles -->
    <link rel="stylesheet" href="/assets/vendors/bundle.css" type="text/css"> --}}
    <!-- end::global styles -->

    <!-- begin::custom styles -->
    <link rel="stylesheet" href="/assets/css/app.min.css" type="text/css">
    <!-- end::custom styles -->

</head>
<body class="bg-white h-100-vh p-t-0">

<!-- begin::page loader-->
<div class="page-loader">
    <div class="spinner-border"></div>
    <span>Tunggu sebentar akhi ...</span>
</div>
<!-- end::page loader -->

<div class="p-b-50 d-block d-lg-none"></div>

<div class="container h-100-vh">
    <div class="row align-items-md-center h-100-vh">
        <div class="col-lg-6 d-none d-lg-block">
            <img class="img-fluid" src="/assets/media/svg/login.svg" alt="...">
        </div>
        <div class="col-lg-4 offset-lg-1">
            <div class="d-flex align-items-center m-b-20">
                <img src="/assets/media/image/qodrlogo.png" class="m-r-15" width="40" alt="">
                <h3 class="m-0">Qodr</h3>
            </div>
            <p>Silahkan login Akhi</p>
            <form method="POST" action="{{ route('login') }}">
                @csrf
                    <div class="form-group mb-4">
                        <label for="email" class="col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                        <input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" placeholder="Email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                        
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                    </div>
                    <div class="form-group mb-4">
                        <label for="password" class="col-form-label text-md-right">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                        {{-- <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" placeholder="Password"> --}}
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    {{-- <button class="btn btn-primary btn-lg btn-block btn-uppercase mb-4">Login</button> --}}
                    <button type="submit" class="btn btn-success btn-lg btn-block btn-uppercase mb-4">
                        {{ __('Login') }}
                    </button>
                    <div class="d-flex justify-content-between align-items-center mb-4">
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="customCheck">
                            <label class="custom-control-label" for="customCheck">Keep me signed in</label>
                        </div>
                        {{-- <a href="#" class="auth-link text-black">Forgot password?</a> --}}
                        @if (Route::has('password.request'))
                            <a class="auth-link text-black" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
            
                    <div class="text-center">
                        Copyright&copy;Qodr
                    </div>
            </form>
        </div>
    </div>
</div>

<!-- begin::global scripts -->
<script src="/assets/vendors/bundle.js"></script>
<!-- end::global scripts -->

<!-- begin::custom scripts -->
<script src="/assets/js/app.min.js"></script>
<!-- end::custom scripts -->

</body>
</html> 