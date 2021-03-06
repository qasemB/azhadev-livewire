@extends('layouts.master')
<x-guest-layout>
    <x-jet-authentication-card>
        <x-slot name="logo"></x-slot>

        <div dir="rtl" class="mb-4 text-sm text-gray-600">
            {{ __('اگر رمز عبور خود را فراموش کرده اید ، فقط کافیه ایمیل خود را وارد کرده و دکمه تایید را بزنید') }}
        </div>

        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif

        <x-jet-validation-errors class="mb-4" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <div dir="rtl" class="block">
                <x-jet-label for="email" value="{{ __('ایمیل') }}" />
                <x-jet-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div dir="rtl" class="flex items-center justify-end mt-4">
                <x-jet-button>
                    {{ __('تایید بازنشانی رمز عبور') }}
                </x-jet-button>
            </div>
        </form>
    </x-jet-authentication-card>
</x-guest-layout>
