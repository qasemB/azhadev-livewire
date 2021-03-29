<div class=" row top_header_banner align-items-center justify-content-center pt-5 mt-5">
    <div class="bg_blur_light pt-2 pb-1 px-4 bg_blur_light rounded_5 d-none d-md-block">
        <h3 class="text-center text-dark">خیلی زود مسیر برنامه نویسی رو پیدا کن</h1>
    </div>
    <div class="row col-12 col-md-10 justify-content-center article_goup">
        @if (sizeof($categories) > 0)
            @foreach ($categories as $c)
            <a href="/search/{{$c->id}}" class="p-4 col-11 col-md-4">
                <div class="p-3 cursor_pointer_shadow rounded bg_blur_light text-center border_2 border_white">
                    <i class="{{$c->icon}} fa-3x"></i>
                    <h4 class="text-center ">{{$c->title}}</h4>
                </div>
            </a>
            @endforeach
        @endif

    </div>
</div>

