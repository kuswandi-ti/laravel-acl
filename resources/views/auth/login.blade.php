<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('public/template/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('public/template/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('public/template/dist/css/adminlte.min.css') }}">
</head>

<body class="hold-transition login-page">
    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="text-center card-header">
                <a href="/" class="h1"><b>Admin</b>LTE</a>
            </div>
            <div class="card-body">
                <p class="login-box-msg">
                    <strong>Sign in to start your session</strong>
                </p>

                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>Email : </strong>kuswandi.ti@gmail.com
                    <strong>Password : </strong>12345678
                </div>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3 input-group">
                        <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                            id="email" placeholder="Enter email" value="{{ old('email') }}" required autofocus>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                        @error('email')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="mb-3 input-group">
                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" id="password" placeholder="Enter password" value="{{ old('password') }}"
                            required>
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                        @error('password')
                            <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12">
                            <div class="icheck-primary">
                                <input type="checkbox" name="remember" id="remember_me"
                                    {{ old('remember') ? 'checked' : '' }}>
                                <label for="remember_me">
                                    {{ __('Remember me') }}
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="mb-3 col-12">
                            <button type="submit" class="btn btn-primary btn-block">{{ __('Log in') }}</button>
                        </div>
                    </div>
                </form>

                <p class="mb-1 text-center">
                    <a href="{{ route('password.request') }}">{{ __('Forgot your password?') }}</a>
                </p>
                <p class="mb-0 text-center">
                    <a href="{{ route('register') }}" class="text-center">Register a new membership</a>
                </p>
            </div>
        </div>
    </div>

    <!-- jQuery -->
    <script src="{{ asset('public/template/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('public/template/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('public/template/dist/js/adminlte.min.js') }}"></script>
</body>

</html>
