<div id="articleRight" class="col-12 col-md-8 col-xl-9">
    <div class="p-2 bg-light rounded">
      <h1 class="text-center font_2 py-2">{{$article->h_title}}</h1>
      <div class="image text-center w_30_vw m-auto">
        <img class="max_w_100 " src="{{$article->image}}" alt="{{$article->alt_image}}">
      </div>
      <div class="p-2 text_container">{!! nl2br($article->text) !!}</div>
    </div>
</div>

