@extends('layouts.customlayout')
@section('body')


<!-- Form START -->
<form action="{{ route('login') }}"  method="POST" accept-charset="utf-8" >
    @csrf
    <h4>
            
        @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }} hi</strong>
                    </span>
                @enderror
                <br>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}hu</strong>
                    </span>
                @enderror
    </h4>
    <div class="errorClass">
        <label class="error" id="overallError"></label>
    </div>
    <!-- Email -->
    <div class="mb-3">
        <label class="sr-only" for="email-1">Email Address</label>
        <input id="email" type="email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" autofocus>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
    </div>
    <!-- Password -->
    <div class="mb-3">
    <label class="form-label" for="exampleInputPassword1">Password</label>
    <input id="password" type="password" placeholder="*******" class="form-control @error('password') is-invalid @enderror" name="password"
    required autocomplete="current-password">

@error('password')
    <span class="invalid-feedback" role="alert">
        <strong>{{ $message }}</strong>
    </span>
@enderror    </div>
    <!-- Checkbox -->
    <div class="row align-items-center">
    <div class="col-sm-4">
    <div class="mb-3 form-check">
    <input name="stay_logged_in" id="checkbox-1" value="agree"    class="checkbox-check ng-pristine ng-valid ng-touched" type="checkbox"/>
    <label class="form-check-label" for="exampleCheck1">keep me signed in</label>
    </div>
    </div>
    <div class="col-sm-8 text-sm-end">
    <span class="text-muted"><a href="{{ route('password.request') }}">Forgot Password?</a></span>
    </div>
    </div>
    <!-- Button -->
    <div class="row align-items-center">
    <div class="col-sm-4">
    <button class="btn btn-dark btn-line" type="submit">Login</button>
    </div>
    <div class="col-sm-8 text-sm-end">
    <span class="text-muted">Don't have an account? <a href="{{ route('register') }}">Signup here</a></span>
    </div>
    </div>
    </form>
    <!-- Form END -->




@endsection





