<div id="bestArticles" class="row justify-content-center col-12 col-lg-10 m-auto">
    <div class="col-12 text-right">
        <h4 class="pt-4 pb-1 text-info">{{$kind == "best" ? "مهمترین مقالات" :  "جدیدترین مقالات"}}</h4>
        <hr class="bg-light w-25 h_0_5 m-0 rounded_5">
    </div>
    <div class="row w-100 justify-content-center align-items-center">
        @foreach ($articles as $article)
        <livewire:article.article-card :article="$article" :key="$article->id" />
        @endforeach
    </div>
</div>

