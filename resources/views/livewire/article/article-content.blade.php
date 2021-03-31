<div id="articleRight" class="col-12 col-md-8 col-xl-9">
    <div class="p-2 bg-light rounded">
      <h1 class="text-center font_2 py-2">{{$article->h_title}}</h1>
      <div class="image text-center w_30_vw m-auto">
        <img class="max_w_100 " src="{{$article->image}}" alt="{{$article->alt_image}}">
      </div>
      @php
        $textArr = explode('---' ,$article->text);
        $i=1
      @endphp
      <div dir="rtl" class="p-2 text_container">
          @foreach ($textArr as $t)
                @if ($i % 2 == 0)
                    <div id="article_lathin_box" dir="ltr" class="alert-secondary rounded px-2 text-left">
                        @php $text = nl2br($t); $textArr2 = explode('<br />' ,$text); @endphp
                        @foreach ($textArr2 as $item)
                            {{$item}}
                            <br/>
                        @endforeach
                    </div>
                @else
                    @php $text = nl2br($t); $textArr2 = explode('<br />' ,$text); @endphp
                    @foreach ($textArr2 as $item)
                        {{$item}}
                        <br/>
                    @endforeach
                @endif
            @php $i++; @endphp
          @endforeach
      </div>
    </div>
</div>

