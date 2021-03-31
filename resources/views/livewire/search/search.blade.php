<div id="bestArticles" class="row justify-content-center col-12 col-lg-10 pt-5 m-auto">
    @section('title' ,'جست و جوی مقالات')
    @section('metas')
    <meta name="googlebot" content="index,follow" />
    <link rel="canonical" href={{App\Models\Thing::where('title' , 'webAddress')->first()->val.'/search'}}/>
    <meta property="og:url" content={{App\Models\Thing::where('title' , 'webAddress')->first()->val.'/search'}} />
    @endsection

    <div class="col-12 row justify-content-center align-items-center mt-3 py-2">
        <div class="col-12 col-md-6 form-group search_box">
          <input
            type="text"
            class="form-control rounded_5 placeholder_gray shadow-sm h_2_5"
            placeholder="عنوان رو وارد کن"
            wire:model.debounce.500ms = "char"
          />
          <i class="fas fa-search search_btn"></i>
        </div>
        <div class="col-12 col-md-6 form-group search_box">
          <select class="rounded_5 outline_0 h_2_5 border-0 form-control" wire:model.lazy="categoryId">
            <option value="0">انتخاب بر اساس گروه</option>
            @if ($categories)
            @foreach ($categories as $c)
            <option value="{{$c->id}}">{{$c->title}}</option>
            @endforeach
            @endif

          </select>
        </div>
      </div>

    <div class="col-12 text-right">
        <h4 class="pt-4 pb-1 text-info">مقالات یافت شده</h4>
        <hr class="bg-light w-25 h_0_5 m-0 rounded_5">
    </div>
    <div class="row w-100 justify-content-center align-items-center">
        @foreach ($articles as $article)
        <livewire:article.article-card :article="$article" :key="$article->id" />
        @endforeach
        {{$articles->links('partials.pagination-links')}}
    </div>
</div>
