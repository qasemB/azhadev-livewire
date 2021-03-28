<header class="container-fluid bg-light shadow fixed-top py-1 w_100vw">
    <div class="row m-0 justify-content-between w-100 align-items-center">

      <ul class="d-flex menu_top align-items-center mb-0 px-0">

        <li class="logo_top animate__animated animate__flip">
          <a href="/">
            <img class="cursor_pointer" src="/images/logo/pngLogo.png" />
          </a>
        </li>

        <li class="mx-2 cursor_pointer_text_shadow">
          <a href="/search/0">مقالات</a>
          <span></span>
        </li>

        <li class="mx-2 cursor_pointer_text_shadow">
          <a href="/about">
            معرفی
          </a>
          <span></span>
        </li>

        <li class="mx-2 ">
            @if (auth()->check())
            <div class="user_header_menu cursor_pointer_text_shadow" >
                <a href="#">نام کاربر</a>

                  {{-- <ul class="user_header_menu_ul">
                    <li class="cursor_pointer_text_shadow" > خروج </li> --}}

                      {{-- if is admin --}}
                      {{-- <li class="cursor_pointer_text_shadow">
                        <a href="/admin">
                          <div>داشبورد</div>
                        </a>
                      </li> --}}
{{--
                  </ul> --}}
              </div>
              @else
              <a href="/login">ورود</a>
              @endif
            <span></span>
        </li>

        <li id="search_icon_mobile" class="d-block d-md-none mx-4">
          <a href="/search/0">
            <i class="fas fa-search fa-2x cursor_pointer_text_shadow "></i>
          </a>
        </li>

      </ul>

        <div class="col-12 col-md-4 form-group search_box  d-none d-md-block">
          <input type="text" class="form-control rounded_5 placeholder_gray shadow-sm" placeholder="دنبال چی می گردی؟" />
          <a href="#">
            <a class="fas fa-search search_btn"></a>
          </a>
        </div>

    </div>
  </header>

