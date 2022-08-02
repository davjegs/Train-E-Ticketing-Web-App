@extends('frontend.master')

@section('title')
  Login
@endsection

@section('content')
<!--LOGIN HERE-->
<div class="container mb-5">
    <p class="h1 text-grey mt-5"><b>LOGIN</b></p>
    <div id="notice" class="col-10 bg-danger p-3 mt-3 text-white rounded">
        You need to login to use our services.
    </div>
                    <form method="POST" action="{{ route('login') }}" class="mt-5">
                        @csrf

                        <div class="form-group row">
                            {{-- <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label> --}}

                            <div class="col-12 col-md-3">
                                <legend for="email" class="text-success">Email</legend>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            {{-- <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label> --}}

                            <div class="col-12 col-md-3">
                                <legend for="password" class="text-success">Password</legend>
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                @if (Route::has('password.request'))
                                    <span>
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    </span>
                                @endif
                            </div>

                            <div class="col-12 col-md-3">
                                <legend for="remember" class="text-success">Remember me</legend>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <span class="form-check-label">
                                        {{ __('Remember Me') }}
                                    </span>
                                </div>
                            </div>

                            <div class="col-12 col-md-3 offset-9 offset-md-0 mt-n5 mt-md-0">
                                <button type="submit" class="btn btn-lg btn-success mt-3 mt-md-5">login</button>
                            </div>
                        </div>
                    </form>
    <div class="mt-3"><span>Haven't registered? <a href="register" class="text-decoration-underline text-success"> Register here</a></span></div>
</div>

@endsection
