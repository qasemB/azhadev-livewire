{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-jet-checkbox id="remember_me" name="remember" />
                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-jet-button class="ml-4">
                    {{ __('Log in') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

@extends('layouts.master')

@section('content')
<div class="main container pt-4">
    <div class="row w-100 m-auto justify-content-center align-items-center pt-5">
      <form method="POST" action="{{ route('login') }}" class="w-100 m-auto bg_blur_light p-4 col-12 col-md-6 my-5 shadow rounded">
        @csrf

        <i class="fas fa-user-check fa-3x d-block text-center my-3"></i>

        <h5 class="text-center">فرم ورود</h5>

        @include('partials.validation-errors')

        <div class="form-group row justify-content-center">
          <input id="email" type="email" name="email" value="{{old('email')}}" required autofocus class="form-control rounded_5 col-10 col-md-8 shadow" placeholder="ایمیل">
        </div>

        <div class="form-group row justify-content-center">
          <input id="password" type="password" name="password" required autocomplete="current-password" class="form-control rounded_5 col-10 col-md-8 shadow" placeholder="کلمه عبور">
        </div>

        <div class="form-group row justify-content-center">
          <input type="checkbox" id="remember_me" name="remember" class="form-control outline_0 box_shadow_0 h-auto">
          مرا بخاطر بسپار
        </div>
        <div class="form-group row justify-content-center">
            <div class="g-recaptcha" data-sitekey="{{env('CAPTCHA_KEY')}}"></div>
        </div>

        <div class="form-group row justify-content-center">
          <button class="btn btn-success rounded_5 px-5 shadow-sm">ورود</button>
        </div>

        <a class="text-center d-block text-info cursor_pointer_text_shadow col-12 w-100 py-2" href="{{ route('password.request') }}">
            رمز عبور را فراموش کرده ام
        </a>
        <a class="text-center d-block text-info cursor_pointer_text_shadow col-12 w-100 py-2" href="{{ route('register') }}">
            هنوز ثبت نام نکرده ام
        </a>

      </form>
    </div>
  </div>
@endsection
