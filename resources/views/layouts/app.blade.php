@extends('layouts.master')

@section('livewireCss')
    @livewireStyles
@endsection


@section('content')
    {{ $slot }}
@endsection


@section('livewireJs')
    @livewireScripts
@endsection

