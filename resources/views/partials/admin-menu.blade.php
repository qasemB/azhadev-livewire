      <div>
        @section('title' , 'پنل ادمین')
        @section('metas')
        <meta name="googlebot" content="noindex,nofollow" />
        <link rel="canonical" href={{App\Models\Thing::where('title' , 'webAddress')->first()->val.'/admin'}}/>
        <meta property="og:url" content={{App\Models\Thing::where('title' , 'webAddress')->first()->val.'/admin'}} />
        @endsection
        <div class="mx-0 w-100 row justify-content-center align-items-center alert-secondary my-2 py-4">
          <a href="/admin/add-category">
            <span class="btn btn-success rounded_5 mx-3 my-1">
              افزودن دسته
            </span>
          </a>
          <a href="/admin/manage-category">
            <span class="btn btn-warning rounded_5 mx-3 my-1">
              مدیریت دسته
            </span>
          </a>
          <a href="/admin/add-article">
            <span class="btn btn-success rounded_5 mx-3 my-1">
              افزودن مقاله
            </span>
          </a>
          <a href="/admin/manage-article">
            <span class="btn btn-warning rounded_5 mx-3 my-1">
              مدیریت مقاله
            </span>
          </a>
          <a href="/admin/manage-comment">
            <span class="btn btn-warning rounded_5 mx-3 my-1">
              مدیریت نظرات
            </span>
          </a>
          <a href="/admin/manage-users">
            <span class="btn btn-warning rounded_5 mx-3 my-1">
              مدیریت کاربران
            </span>
          </a>
        </div>
      </div>
