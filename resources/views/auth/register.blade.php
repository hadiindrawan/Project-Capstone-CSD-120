@extends('layout.auth')
@section('title', 'Register')
@section('isiauth')
    <div class="container">
        <div class="row" style="">
            <div class="card form" style="
                            width: 30%;
                            margin: 0 auto;
                            margin-top: 100px;
                            background: #FFFFFF;
                            border-radius: 15px;
                            box-shadow: 0px 15px 30px rgba(0, 0, 0, 0.25);
                            ">
                <form class="p-3" style="" method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="text-center mb-3">
                        <h5><strong>Register</strong></h5>
                    </div>
                    <div class="mb-3">
                        <label for="name" class="form-label">Name</label>
                        <input type="email" class="form-control" name="name" id="name" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="exampleInputPassword1">
                    </div>
                    <div class="mb-3">
                        <label for="confirmation" class="form-label">Confirmation Password</label>
                        <input type="password" class="form-control" name="password_confirmation" id="confirmation">
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary px-5"
                            style="background: linear-gradient(270.62deg, #1289FF -25.07%, #A0B304 103.72%);
                                                            border-radius: 20px; border: none; margin: 0 auto;">Register</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
{{-- <x-guest-layout>
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

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required
                    autofocus />
            </div>
            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                    required />
            </div>
            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required
                    autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full" type="password"
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
</x-guest-layout> --}}
