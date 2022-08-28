@extends('layouts.customer')
@section('content')

<!-- Header Area End Here -->
            <!-- Begin Li's Breadcrumb Area -->
            <div class="breadcrumb-area">
                <div class="container">
                    <div class="breadcrumb-content">
                        <ul>
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active">Register</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- Li's Breadcrumb Area End Here -->
            <!-- Begin Login Content Area -->
            <div class="page-section mb-60">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-sm-12 col-md-12 col-lg-6 col-xs-12">
        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />
                            <form method="POST" action="{{ route('register') }}">
                            @csrf
                                <div class="login-form">
                                    <div class="row d-flex justify-content-center">
                                        <h4 class="login-title">
                                            <a href="{{ url('/') }}">CABINETS PRO</a>
                                        </h4>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 mb-20">
                                            <label for="name">Name</label>
                                            <input id="name" class="mb-0"  placeholder="Name" type="text" name="name" :value="old('name')" required autofocus>
                                        </div>
                                        
                                        <div class="col-md-12 mb-20">
                                            <label for="email" :value="__('Email')" >Email Address*</label>
                                            <input id="email" class="mb-0" placeholder="Email Address" type="email" name="email" :value="old('email')" required >
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label for="password" :value="__('Password')" >Password</label>
                                            <input id="password" class="mb-0" type="password" placeholder="Password" name="password"
                                            required autocomplete="new-password">
                                        </div>
                                        <div class="col-md-6 mb-20">
                                            <label for="password_confirmation" :value="__('Confirm Password')">Confirm Password</label>
                                            <input id="password_confirmation" class="mb-0" type="password" placeholder="Confirm Password" name="password_confirmation" required>
                                        </div>
                                        <div class="col-12">
                                            <button class="register-button mt-0">Register</button>

                                            <a class="d-inline-block ml-0 ml-md-2 mt-1" style="color: #363f4d;"href="{{ route('login') }}">Already registered?</a>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Login Content Area End Here -->
            <!-- Begin Footer Area -->
            


<x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout>
@endsection
