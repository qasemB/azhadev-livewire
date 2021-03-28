<div class="main container-fluid">
    <!-- -------------------- top banner ------------------------- -->
    <livewire:index.top-banner />

    <!-- -------------------- best article ------------------------- -->
    <livewire:index.group-cards-article :kind="'best'" />

    <!-- -------------------- new article ------------------------- -->
    <livewire:index.group-cards-article :kind="'last'" />
  </div>
