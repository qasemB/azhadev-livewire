@section('title')
    {{$article->top_title}}
@endsection
<div class="main container mt-5 pt-4">
    <div class="row my-4">
        <livewire:article.article-content :article="$article" />
        <livewire:article.article-sidebar :article="$article"/>
    </div>
    <livewire:article.article-comments :article="$article"/>
</div>

