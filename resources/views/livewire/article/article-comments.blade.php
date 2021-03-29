<div id="comment_container" class="row justify-content-center align-items-center alert-secondary p-3 rounded">
    <div class="row p-3 justify-content-center rounded text-right alert-light d-block mb-4 col-12">
        @foreach (explode('-' , $article->keywords) as $k)
            <a href="/search/0/{{$k}}">({{$k}})</a>
        @endforeach
    </div>
    @if (auth()->check())
    <div class="col-12 row justify-content-center form-group rounded py-1 {{$commentIdForAnswer>0 ? "alert-warning" : ""}}">
        @if ($commentIdForAnswer>0)
        <h5 class="col-12 text-center">متن پاسخ: برای <span class="text-info">{{$commentSelectedForAnswer->user->name}}</span></h5>
        @else
        <h5 class="col-12 text-center">متن نظر:</h5>
        @endif
        <textarea rows="10" class="form-control rounded shadow col-12 col-md-8 " wire:model.defer="text"></textarea>
        @error('text') <h6 class="col-12 text-center text-danger">{{$message}}</h6> @enderror
        <div class="text-center col-12 mt-3">
            <button class="btn btn-success rounded_5" wire:click="sendComment">{{$commentIdForAnswer>0 ? "ارسال پاسخ" : "ارسال نظر"}}</button>
            @if ($commentIdForAnswer>0)
            <button class="btn btn-secondary rounded_5" wire:click="canselAnswer">انصراف</button>
            @endif
        </div>
    </div>
    @else
    <h6 class="text-center py-5 text-info">لطفا وارد شو و نظر بده</h6>
    @endif

    <div class="col-12 col-md-11 bg-white p-3">
    @if (sizeof($comments)>0)
    @foreach ($comments as $c)
      <div class="row my-4 d-block p-2 rounded shadow-sm border_1 col-11 mx-auto shadow">
        <div class="row justify-content-lg-between w-100 m-auto">
          <h6 class="text-right text-success">{{$c->user->name}} - {{$c->created_at->diffForHumans()}}</h6>
        </div>
        <div class=" w-100 pb-3">
          <p class="text-justify">{!! nl2br($c->text) !!}</p>
          <a class="btn btn-primary rounded_5 px-3 text-light" wire:click.prevent="goToAnswer({{$c->id}})">پاسخ</a>
        </div>

            @if (sizeof($answers)>0)
                @foreach ($answers as $a)
                    @if ($a->parent_id == $c->id)
                    <div class="answer shadow-sm alert-success p-2 my-2">
                    <div class="row justify-content-lg-between w-100 m-auto">
                        <h6 class="text-right text-info">{{$a->user->name}} - {{$a->created_at->diffForHumans()}}</h6>
                    </div>
                    <p >{!! nl2br($a->text) !!}</p>
                    </div>
                    @endif
                @endforeach
            @endif
      </div>
      @endforeach
      @else
      <h5 class="text-center py-5 text-info">هنوز نظری ایجاد نشده</h5>
    @endif
    </div>
    @include('partials.successMessage')
</div>

