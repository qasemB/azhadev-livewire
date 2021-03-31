@extends('layouts.master')


@section('header')
    {{''}}
@endsection


@section('content')
<h3 class="w-100 text-center">
    <a href="/" class="">متاسفم... شما احراز هویت نشده اید... لطفا برگرد</a>
</h3>

<div class="errorContainer row">
    <div class="error_svg">
        <img src="/images/error_svg/401_Error.svg" alt="401">
    </div>
</div>
@endsection




@section('footer')

    {{''}}

@endsection
