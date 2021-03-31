<footer class="container-fluid bg-dark text-light p-3 p-md-4 w-100vw mt-5 mx-0">
    <div class="row">
      <div class="col-11 col-md-4 mx-auto">
        <h5 class="text-center">عنوان</h5>
        <p class="text-justify font_0_9">{{$things->where('title' , 'footer_about')->first()->val}}</p>
      </div>

      <div class="col-11 col-md-4 mx-auto">
        <h5 class="text-center">لینک ها</h5>
       <ul class="px-0">
         <li class="text-center">
            <a href="{{$things->where('title' , 'footer_link1')->first()->val}}">
                {{$things->where('title' , 'footer_link_title1')->first()->val}}
            </a>
        </li>
        <li class="text-center">
            <a href="{{$things->where('title' , 'footer_link2')->first()->val}}">
                {{$things->where('title' , 'footer_link_title2')->first()->val}}
            </a>
        </li>
        <li class="text-center">
            <a href="{{$things->where('title' , 'footer_link3')->first()->val}}">
                {{$things->where('title' , 'footer_link_title3')->first()->val}}
            </a>
        </li>
        <li class="text-center">
            <a href="{{$things->where('title' , 'footer_link4')->first()->val}}">
                {{$things->where('title' , 'footer_link_title4')->first()->val}}
            </a>
        </li>
       </ul>
      </div>

      <div class="col-11 col-md-4 mx-auto">
        <h5 class="text-center">همچنین</h5>
       <ul class="px-0">
           @if (sizeof($keywords) > 0)
           @foreach ($keywords as $k)
           <li class="text-center"><a href="/article/{{$k->for}}">{{$k->keyword}}</a></li>
           @endforeach
           @endif
       </ul>
      </div>

    </div>

    <hr class="bg-light col-11">

    <div class="d-flex justify-content-center align-items-center">
      <a href="{{$things->where('title' , 'instagram_link')->first()->val}}" class="fab fa-2x cursor_pointer fa-instagram px-2 mx-2"></a>
      <a href="/" class="fab fa-2x cursor_pointer fa-telegram px-2 mx-2"></a>
      <a href="/" class="fab fa-2x cursor_pointer fa-facebook px-2 mx-2"></a>
    </div>

  </footer>

