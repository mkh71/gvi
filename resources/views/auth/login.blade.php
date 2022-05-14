@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="account-content">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7 col-lg-6 login-left">
                        <img src="{{ url('/assets/img/login-banner.png') }}" class="img-fluid" alt="BPAro Login">
                    </div>
                    <div class="col-md-12 col-lg-6 login-right">
                        <div class="login-header">
                            <h3>Login <span>BPAro</span></h3>
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group form-focus">
                                <input type="email" class="form-control floating @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" required="">
                                <label class="focus-label">Email</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group form-focus mt-5">
                                <input type="password" class="form-control floating @error('password') is-invalid @enderror" name="password" required="">
                                <label class="focus-label">Password</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="text-right">
                                <a class="forgot-link" href="{{ route('password.request') }}">Forgot Password ?</a>
                            </div>
                            <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Login</button>
                        </form>
                            <div class="login-or">
                                <span class="or-line"></span>
                                <span class="span-or">or</span>
                            </div>

                            <div class="text-center dont-have">Don’t have an account? <a href="{{ url('/register') }}">Register</a></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
