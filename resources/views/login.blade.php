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
                                <div class="omega-form">
                                    <form action="{{ route('postSignin') }}" class="form" method="POST">
                                        @csrf
                                        <div class="form-title mb--35">
                                            <h2 class="title">Sign In</h2>
                                            <p>Enter your account details below</p>
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control text-dark" type="email" id="email" name="email"
                                                placeholder="Your Email" autocomplete="off">
                                        </div>
                                        <div class="form-group forget-block">
                                            <input class="form-control" name="password" type="password" id="passField"
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
                                            <p class="sign-up-text">Don’t have an account? <a href="{{ route('getSignup') }}">Create for
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
