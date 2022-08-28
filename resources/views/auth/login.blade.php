@extends('layouts.customer')
@section('content')
<!-- Header Area End Here -->
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="active">Login</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Login Content Area -->
            <div class="page-section mb-60">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-12 col-md-12 col-xs-12 col-lg-6 mb-30 " >
                            <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <!-- Login Form s-->
                            <form method="POST" action="{{ route('login') }}">
                            @csrf
                                <div class="login-form">
                                    <div class="row d-flex justify-content-center">
                                        <h4 class="login-title">
                                            <a href="{{ url('/') }}">CABINETS PRO</a>
                                        </h4>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 col-12 mb-20">
                                            <label for="email" :value="__('Email')">Email</label>
                                            <input id="email" class="mb-0" type="email" placeholder="Email Address" name="email" :value="old('email')" required autofocus>
                                        </div>
                                        <div class="col-12 mb-20">
                                            <label for="password" :value="__('Password')">Password</label>
                                            <input id="password" class="mb-0" type="password" placeholder="Password" name="password"
                                            required autocomplete="current-password">
                                        </div>
                                        <div class="col-md-8">
                                            <div class="check-box d-inline-block ml-0 ml-md-2 mt-10">
                                                <input type="checkbox" id="remember_me" name="remember">
                                                <label for="remember_me">Remember me</label>
                                            </div>
                                        </div>
                                        <div class="col-md-4 mt-10 mb-20 text-left text-md-right">
                                          @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}" style="color: #363f4d;">Forgot password?</a>
                                          @endif
                                        </div>
                                        <div class="col-md-12">
                                            <button class="register-button mt-0">Login</button>

                                            <a class="d-inline-block ml-0 ml-md-2 mt-1" style="color: #363f4d;"href="{{ url('/register') }}">Register</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <!-- <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
                            <form action="#">
                                <div class="login-form">
                                    <h4 class="login-title">Register</h4>
                                    <div class="row">
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>First Name</label>
                                            <input class="mb-0" type="text" placeholder="First Name">
                                        </div>
                                        <div class="col-md-6 col-12 mb-20">
                                            <label>Last Name</label>
                                            <input class="mb-0" type="text" placeholder="Last Name">
                                        </div>
                                        <div class="col-md-12 mb-20">
                                            <label>Email Address*</label>
                                            <input class="mb-0" type="email" placeholder="Email Address">
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Password</label>
                                            <input class="mb-0" type="password" placeholder="Password">
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label>Confirm Password</label>
                                            <input class="mb-0" type="password" placeholder="Confirm Password">
                                        </div>
                                        <div class="col-12">
                                            <button class="register-button mt-0">Register</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div> -->
                    </div>
                </div>
            </div>
            <!-- Login Content Area End Here -->
            <!-- Begin Footer Area -->


@endsection
