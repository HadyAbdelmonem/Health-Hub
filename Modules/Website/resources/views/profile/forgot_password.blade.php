@extends('website::layouts.master')
@section('content')

        <!-- verify area -->
        <div class="login-area py-90">
            <div class="container">
                <div class="col-md-7 col-lg-5 mx-auto">
                    <div class="login-form">
                            <div class="login-header">
                                <img src="assets/img/logo/logo.png" alt="">
                                <p>Forgot Password</p>
                            </div>
                            @if (session('status'))
                                <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                                </div>
                            @endif
                            <form method="POST" action="{{ route('password.email') }}">
                            <div class="form-group">
                                <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                                <input placeholder="Enter Your Email" id="email" type="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" name="email"  required autocomplete="email" autofocus>
                            </div>
                            <div class="d-flex align-items-center justify-content-center">
                                    @csrf
                                    <button type="submit" class="theme-btn"><i class="far fa-sign-in"></i> {{ __('Send') }}</button>
                                </form>
                            </div>
                            <div class="login-footer">
                                <p>Have a Problem? <a href="">Contact Us.</a></p>
                            <div class="social-login">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- verify area end -->



@endsection