@extends('layouts.main')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="account-content">
                <div class="row align-items-center justify-content-center">
                    <div class="col-md-7 col-lg-6 login-left">
                        <img src="{{ url('/assets/img/login-banner.png') }}" class="img-fluid" alt="BPAro Patient Register">
                    </div>
                    <div class="col-md-12 col-lg-6 login-right">
                        <div class="login-header">
                            <h3>Patient Register </h3>
                        </div>

                        <form method="POST" action="{{ route('register') }}">
                            @csrf
                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating @error('name') is-invalid @enderror" value="{{ old('name') }}" required="" name="name">
                                <label class="focus-label">Name</label>
                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group form-focus">
                                <input type="email" class="form-control floating @error('email') is-invalid @enderror" value="{{ old('email') }}" required="" name="email">
                                <label class="focus-label">Email</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group form-focus">
                                <input type="text" class="form-control floating @error('country_code') is-invalid @enderror" value="{{ old('country_code') }}" required="" name="country_code">
                                <label class="focus-label">Country Code (eg. +1, +91)</label>
                            </div>

                            <div class="form-group form-focus">
                                <input type="text" class="form-control phoneNumber floating @error('phone') is-invalid @enderror" name="phone" required="" value="{{ old('phone') }}">
                                <label class="focus-label">Mobile Number</label>
                            </div>

                            <div class="form-group form-focus">
                                <input type="password" class="form-control floating @error('password') is-invalid @enderror" name="password" required="">
                                <label class="focus-label"> Password</label>
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group form-focus">
                                <input type="password" class="form-control floating" name="password_confirmation" required="">
                                <label class="focus-label">Confirm Password</label>
                            </div>

                            <div class="text-right">
                                <a class="forgot-link" href="{{ url('/login') }}">Already have an account?</a>
                            </div>
                            <button class="btn btn-primary btn-block btn-lg login-btn" type="submit">Signup</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('javascript')
<script>
    var filter = [];

    const keypadZero = 48;
    const numpadZero = 96;

    for(var i = 0; i <= 9; i++){
      filter.push(i + keypadZero);
      filter.push(i + numpadZero);
    }

    filter.push(8);     //backspace
    filter.push(9);     //tab
    filter.push(46);    //delete
    filter.push(37);    //left arrow
    filter.push(39);    //right arrow

    function replaceAll(src,search,replace){
      return src.split(search).join(replace);
    }

    function formatPhoneText(value){
      value = this.replaceAll(value.trim(),"-","");

      if(value.length > 3 && value.length <= 6)
        value = value.slice(0,3) + "-" + value.slice(3);
      else if(value.length > 6)
        value = value.slice(0,3) + "-" + value.slice(3,6) + "-" + value.slice(6);

      return value;
    }

    function validatePhone(p){
      var phoneRe = /^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/;
      var digits = p.replace(/\D/g, "");
      return phoneRe.test(digits);
    }

    function onKeyDown(e){
      if(filter.indexOf(e.keyCode) < 0){
        e.preventDefault();
        return false;
      }
    }

    function onKeyUp(e){
      var input = e.target;
      var formatted = formatPhoneText(input.value);
      var isError = (validatePhone(formatted) || formatted.length == 0);
      var color =  (isError) ? "gray" : "red";
      var borderWidth =  (isError)? "1px" : "3px";
      input.style.borderColor = color;
      input.style.borderWidth = borderWidth;
      input.value = formatted;
    }

    function setupPhoneFields(className){
      var lstPhoneFields = document.getElementsByClassName(className);
      for(var i=0; i < lstPhoneFields.length; i++){
        var input = lstPhoneFields[i];
        if(input.type.toLowerCase() == "text"){
          input.placeholder = "Phone (XXX-XXX-XXXX)";
          input.addEventListener("keydown", onKeyDown);
          input.addEventListener("keyup", onKeyUp);
        }
      }
    }

    setupPhoneFields("phoneNumber");
</script>
@endsection
