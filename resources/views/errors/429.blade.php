@extends('layouts.master')


@section('header')
    {{''}}
@endsection


@section('content')
<h3 class="w-100 text-center">
    <a href="/" class="">متاسفم... تعداد درخواست زیاده... لطفا صبر کنید</a>
</h3>

<div class="errorContainer row">
    <div class="error_svg">
        <img src="/images/error_svg/429_Error.svg" alt="429">
    </div>
</div>
@endsection


@section('footer')
    {{''}}
@endsection
