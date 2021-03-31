<div class="container pt-5">
    @section('title' , 'معرفی آژادو')
    @section('metas')
    <meta name="googlebot" content="index,follow" />
    <link rel="canonical" href={{App\Models\Thing::where('title' , 'webAddress')->first()->val.'/about'}}/>
    <meta property="og:url" content={{App\Models\Thing::where('title' , 'webAddress')->first()->val.'/about'}} />
    @endsection
    <div class="row justify-content-center align-items-center py-4">
      <div class="col-12 px-0 mb-3 row d-flex justify-content-center">
        <div dir="rtl" class="col-12">
          <div class="avatar_image m-auto">
            <img src="/images/avatar/qasem.jpg" />
          </div>
          <h4 class="px-2 w-100 text-center">
            Qasem
            <br />
            Full Stack Developer
            <br />
            راه ارتباطی : MahdiCmptr@gmail.com
          </h4>
        </div>
      </div>
      <div class="col-12 px-0">
        <ul class="px-0 row">
            @foreach ($abilities as $a)
            <li key={a.id} class="my-2 col-6 col-md-2 text-center">
                <img
                class="mx-2"
                width="40"
                src="/images/logos/{{$a->image_name}}.png"
                alt="{{$a->image_name}}"
                />
                <span>{{$a->name}}</span>
            </li>
            @endforeach
        </ul>
      </div>
      <div class="about_paragraph col-11 col-md-12 py-4 mb-5 m-auto">
        <p class="text-justify">سلام خدمت اساتید گرامی</p>
        <p class="text-justify">
          اینهایی که در بالا می بینید ادعایی در توانایی شون ندارم و افتخار
          می کنم که دارم توی این زمینه ها فعالیت می کنم و در حال یادگیری
          هستم .
        </p>
        <p class="text-justify">
          قصد این رو هم ندارم که تعدادشون رو زیاد کنم یا درصد توانایی رو
          بالا ببرم. فقط میخوام ازشون به عنوان ابزار استفاده کنم و البته
          باید بگم که عاشقشونم و باهاشون حال می کنم
        </p>
        <p class="text-justify">
          ممکنه فردا تکنولوژی جدید تری بیاد و بخوام اون رو هم یاد بگیرم .
          البته نباید فراموش کنیم که اینها فقط ابزار هستند و این ما هستیم که
          قراره تصمیم بگیریم چه کاری انجام بدیم و نسبت به اون ، کدومشون رو
          انتخاب کنیم
        </p>
        <p class="text-justify">خوب دیگه ... </p>
        <p class="text-justify">
          چندسالی هست در زمینه برنامه نویسی دارم فعالیت می کنم و اکثر
          چیزهایی که بلدم به صورت خود آموز یاد گرفتم و بیشتر با سرچ و مطالعه
          مستندات این تکنولوژی ها بود و البته تشکر فراوان از همه اساتیدی می
          کنم که این مطالب رو دراختیار همنوعاشون قرار میدن.
        </p>
        <p class="text-justify">
          توی این مسیر ، راه های زیادی رو امتحان کردم و توی بعضی هاشون به بن
          بست خوردم ، چون راهنمای جامع و کاملی در کنارم نبوده و مجبور بودم
          تا یک مورد رو انتخاب کنم و خودم تجربه کنم تا به نتیجه برسم و ...
        </p>
        <p class="text-justify">
          تجربیاتی که در این وبسایت به صورت مقاله قرار میدم ، راهکارها و
          مسائلی هست که خودم توی این مدت فرا گرفتم . مسائلی که در ابتدای راه
          ، حاضر بودم چند میلیون پرداخت کنم و فقط در طی این مسیر دچار اشتباه
          نشم ، ولی کسی رو پیدا نکردم که دلسوزانه بتونه سوالام رو پاسخ
          بده(نمیگم نبود، من پیدا نکردم)
        </p>
        <p class="text-justify">
          دوستان عزیزی هم بودن که ازشون سوالاتم رو بپرسم ولی خیلی از سوال
          های من بی پاسخ بودند و نیازمند تلاش بسیار
        </p>
        <p class="text-justify">
          الان تصمیم گرفتم تا تجربیاتی رو که توی این زمینه کسب کردم رو با
          دوستان علاقه مند که در ابتدای این راه هستند ، به اشتراک بگذارم تا
          شاید بدردشون بخوره . پاسخ همون سوالاتی که نتونسم هیچوقت از کسی
          بپرسم .
        </p>
        <p class="text-justify">
          اگر هم سوالی هست ، اگر در توانم باشه ، خوشحال میشم توی قسمت نظرات
          مقالات به دوستان پاسخ بدم
        </p>
      </div>
    </div>
</div>
