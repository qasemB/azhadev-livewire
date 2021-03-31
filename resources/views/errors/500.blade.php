@extends('layouts.master')


@section('header')
    {{''}}
@endsection

@section('content')
<h3 class="w-100 text-center">
    <a href="/" class="">متاسفم... مشکلی از سمت سرور پیش اومده... لطفا برگرد</a>
</h3>

<div class="errorContainer row">
    <div class="error_svg">
        <img src="/images/error_svg/500_Error.svg" alt="500">
    </div>
</div>
@endsection




@section('footer')
    {{''}}
@endsection
