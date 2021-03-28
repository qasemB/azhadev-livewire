{{-- <x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo">
            <x-jet-authentication-card-logo />
        </x-slot>

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div>
                <x-jet-label for="name" value="{{ __('Name') }}" />
                <x-jet-input  class="block mt-1 w-full" id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            </div>

            <div class="mt-4">
                <x-jet-label for="email" value="{{ __('Email') }}" />
                <x-jet-input  class="block mt-1 w-full" id="email" type="email" name="email" :value="old('email')" required />
            </div>

            <div class="mt-4">
                <x-jet-label for="password" value="{{ __('Password') }}" />
                <x-jet-input  class="block mt-1 w-full" id="password" type="password" name="password" required autocomplete="new-password" />
            </div>

            <div class="mt-4">
                <x-jet-label for="password_confirmation" value="{{ __('Confirm Password') }}" />
                <x-jet-input  class="block mt-1 w-full" id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-jet-button class="ml-4">
                    {{ __('Register') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout> --}}

@extends('layouts.master')

@section('content')

<div class="main container pt-4">

    <div class="row w-100 m-auto justify-content-center align-items-center pt-5">
      <form  method="POST" action="{{ route('register') }}" class="bg_blur_light p-4 col-12 col-md-6 shadow rounded">
        @csrf
        <i class="fas fa-user-lock fa-3x d-block text-center my-3"></i>
        <h5 class="text-center">فرم ثبت نام</h5>
        @include('partials.validation-errors')

        <div class="form-group row justify-content-center">
          <input id="name" type="text" name="name" value="{{old('name')}}" required autofocus autocomplete="name" class="form-control rounded_5 col-10 col-md-8  shadow" placeholder="نام">
        </div>

        <div class="form-group row justify-content-center">
          <input id="email" type="email" name="email" value="{{old('email')}}" required class="form-control rounded_5 col-10 col-md-8  shadow" placeholder="ایمیل">
        </div>

        <div class="form-group row justify-content-center">
          <input id="password" type="password" name="password" required autocomplete="new-password" class="form-control rounded_5 col-10 col-md-8  shadow" placeholder="کلمه عبور">
        </div>

        <div class="form-group row justify-content-center">
          <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="form-control rounded_5 col-10 col-md-8  shadow" placeholder="تکرار کلمه عبور">
        </div>

        {{-- <div class="form-group row justify-content-center">
          <input type="checkbox" class="form-control outline_0 box_shadow_0 border-0 h-auto" >
          <a href="#" class="text-info mx-2">قوانین</a> را مطالعه کرده ام
        </div> --}}

        <div class="form-group row justify-content-center">
          <button class="btn btn-success rounded_5 px-5 shadow-sm">ثبت نام</button>
        </div>
        <a class="text-center d-block text-info cursor_pointer_text_shadow col-12 w-100 py-2" href="{{ route('login') }}">
            قبلا ثبت نام کرده ام
        </a>
      </form>

    </div>

  </div>

@endsection

