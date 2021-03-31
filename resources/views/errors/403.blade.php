@extends('layouts.master')


@section('header')
    {{''}}
@endsection

@section('content')
<h3 class="w-100 text-center">
    <a href="/" class="">متاسفم... شما اجازه ورود ندارید... لطفا برگرد</a>
</h3>

<div class="errorContainer row">
    <div class="error_svg">
        <img src="/images/error_svg/403_Error.svg" alt="403">
    </div>
</div>
@endsection




@section('footer')

    {{''}}

@endsection

