<div id="articleLeft" class="col-12 col-md-4 col-xl-3 mt-3 mt-md-0">
    <div class="row bg-light px1 py-5 text-center justify-content-center d-flex rounded w-100 m-auto">
      <a href="/about" class="image d-block rounded-circle overflow-hidden h_7 w_7 text-center justify-content-center">
        <img class="max_w_100 m-auto" src="/images/articles/article1.png" alt="توضیح تصویر">
      </a>

        <div class="col-12 mt-3 justify-content-center">
        <small class="text-center d-block">نویسنده:</small>
        <h6 class="text-center">{{$article->writer->name.' '.$article->writer->lastname}}</h6>

        <small class="text-center d-block mt-3">تاریخ:</small>
        <h6 class="text-center">{{$article->created_at->diffForHumans()}}</h6>

        <div class="col-12 justify-content-center text-center mt-3">
          <span class="text-center">بازدید : {{$article->view_count}} </span>
        </div>

        <div class="col-12 justify-content-center text-center mt-3">
          <a href="/search/{{$article->category_id}}" class="btn rounded_5 btn-outline-dark">مقالات همگروه </a>
        </div>
      </div>
    </div>
</div>

