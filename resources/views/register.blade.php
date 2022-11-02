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
                                    <form action="{{ route('postSignup') }}" class="form" method="POST">
                                        @csrf

                                        <div class="form-title mb--35">
                                            <h2 class="title">Sign In</h2>
                                            <p>Enter your account details below</p>
                                        </div>

                                        <div class="from-group">
                                            <input class="form-control" type="text" placeholder="Full name"
                                                name="name" id="name" autocomplete="off" />
                                        </div>
                                        <div class="from-group">
                                            <input class="form-control" type="text" placeholder="Enter email address"
                                                name="email" id="email" autocomplete="off" />
                                        </div>

                                        <div class="form-group">
                                            <input class="form-control" id="passField" name="password" type="password"
                                                placeholder="Password" />
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" id="passField-02" type="password"
                                                placeholder="Password" />
                                        </div>
                                        <div class="form-group form-check-label">
                                            <label for="tarms-check">
                                                <input class="d-none" type="checkbox" id="tarms-check" checked><span
                                                    class="checkbox"></span>
                                                <p>I agree to the <a href=""> Terms &amp; Condition </a></p>
                                            </label>
                                        </div>
                                        <div class="form-group button-block text-center">
                                            <button class="form-btn">Get Started</button>
                                            <p class="sign-up-text">Already have an account?<a href="{{ route('getSignin') }}">Sign in</a>
                                            </p>
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
