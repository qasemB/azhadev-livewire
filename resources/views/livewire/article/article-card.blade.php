<div class="col-11 col-md-3 px-3 py-4 article_card_box">
    <div class="card hover_shadow hover_up">
        <a href="/article/{{$article->id}}">
            <div className="cursor_pointer">
                <div class="card-header h_10 d-flex align-items-center justify-content-center">
                    <img src="{{$article->image}}" alt="{{$article->alt_image}}" class="max_w_100 max_h_100">
                </div>
                <div class="card-body px-1 py-2">
                    <h5 class="text-center text-primary">{{$article->h_title}}</h5>
                    <p class="text-justify text-right font_0_9 text-secondary">{{$article->top_text}}</p>
                    <a href="#" class="btn btn-primary cursor_pointer_shadow rounded_5 px-3">ادامه مقاله</a>
                </div>
            </div>
        </a>
    </div>
</div>

