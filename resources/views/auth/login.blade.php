@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-md-2" style="padding: 20px;">
            <div class="account-content">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7 col-lg-6 login-left align-left">
                        <img src="{{ url('/assets/img/login.jpg') }}" class="img-fluid" alt="GVI Login">
                    </div>
                    <div class="col-md-12 col-lg-6 login-right align-right mt-20">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <div class="form-group form-focus">
                                <input type="email" class="form-control floating @error('email') is-invalid @enderror" value="{{ old('email') }}" name="email" required="required" placeholder="Email">
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group form-focus mt-3">
                                <input type="password" class="form-control floating @error('password') is-invalid @enderror" name="password" required="required" placeholder="Password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group form-focus mt-3">
                                <button class="btn btn-primary login-btn" type="submit">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
