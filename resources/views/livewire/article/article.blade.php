@section('title')
    {{$article->top_title}}
@endsection
@section('metas')
<meta name="googlebot" content="index,follow" />
<link rel="canonical" href={{App\Models\Thing::where('title' , 'webAddress')->first()->val."/article/$article->id"}}/>
<meta property="og:url" content={{App\Models\Thing::where('title' , 'webAddress')->first()->val."/article/$article->id"}} />
@endsection

<div class="main container mt-5 pt-4">
    <div class="row my-4">
        <livewire:article.article-content :article="$article" />
        <livewire:article.article-sidebar :article="$article"/>
    </div>
    <livewire:article.article-comments :article="$article"/>
</div>

