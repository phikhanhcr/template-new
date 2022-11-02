@extends('layouts.auth')

@section('styles')
    <link rel="stylesheet" href="css/color-scheme-1.css">
@endsection

@section('main')
    <div class="site-wrapper overflow-hidden">
        <!-- Sign In Content Start -->
        <div class="sign-page">
            <div class="site-wrapper contact-wrapper">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-7 col-xl-6">
                            <div class="main-block text-center">
                                @if ($errors->any())
                                    <p class="error alert alert-danger">{{ $errors->first() }}</p>
                                @endif
                                <a href="{{ route('getIndex') }}" class="title signup-form-02__title"
                                    style="color: rgba(19, 15, 53, 0.46);">Back to Home</a>
                                <h3 class="title signin-form-02__title">Login to you account</h3>
                                <div class="from__button-group--two mb-5">
                                    <a class="account-btn text-dark" href="{{ route('getSignup') }}">Don’t have an
                                        account?</a>
                                    <a class="createanaccout-btn" href="{{ route('getSignup') }}"> Create an account</a>
                                </div>
                                <div class="omega-form">
                                    <form action="{{ route('postSignin') }}" class="from" method="POST">
                                        @csrf

                                        <div class="form-title mb--35">
                                            <h2 class="title">Sign In</h2>
                                            <p>Enter your account details below</p>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="email" id="email" name="email"
                                                placeholder="Your Email">
                                        </div>
                                        <div class="form-group forget-block">
                                            <input class="form-control" name="password" type="password"
                                                placeholder="Password"><a class="forget-link" href="#">Forgot
                                                Password?</a>
                                        </div>
                                        <div class="form-group form-check-label">
                                            <label for="tarms-check">
                                                <input class="d-none" type="checkbox" id="tarms-check"><span
                                                    class="checkbox"></span>
                                                <p>Keep me signed in</p>
                                            </label>
                                        </div>
                                        <div class="form-group button-block">
                                            <button class="form-btn">Get Started</button>
                                            <p class="sign-up-text">Don’t have an account? <a href="">Create for
                                                    free</a></p>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </div>
    <!-- Sign In Content End -->
    </div>
@endsection
