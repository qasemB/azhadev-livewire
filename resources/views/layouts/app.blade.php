@extends('layouts.master')

@section('livewireCss')
<script src="{{ asset('js/app.js') }}" defer></script>
    @livewireStyles
@endsection


@section('content')
    {{ $slot }}
@endsection


@section('livewireJs')
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false" data-turbo-eval="false"></script>
@endsection

