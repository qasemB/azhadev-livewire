<div class="main container-fluid">
    @section('metas')
    <meta name="googlebot" content="index,follow" />
    <link rel="canonical" href={{App\Models\Thing::where('title' , 'webAddress')->first()->val}}/>
    <meta property="og:url" content={{App\Models\Thing::where('title' , 'webAddress')->first()->val}} />
    @endsection

    <!-- -------------------- top banner ------------------------- -->
    <livewire:index.top-banner />

    <!-- -------------------- best article ------------------------- -->
    <livewire:index.group-cards-article :kind="'best'" />

    <!-- -------------------- new article ------------------------- -->
    <livewire:index.group-cards-article :kind="'last'" />
  </div>
