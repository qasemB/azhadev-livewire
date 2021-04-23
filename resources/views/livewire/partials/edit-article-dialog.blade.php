<div>
    @if ($isOpen)
    <div class="edit_dialog bg-light animate__animated animate__fadeInUp animate__faster">
        <div class="edit_dialog_header bg-primary text-white sticky-top">
            <h5 class="text-center pt-3"><small class="text-warning">عنوان مقاله:</small> {{$h_title}}</h5>
            <button class="edit_dialog_header_exit_button btn btn-outline-light" wire:click="$set('isOpen' , false)">انصراف</button>
        </div>


        <div class="container-fluid">
            <form class="col-12 col-md-8 text-center justify-content-center py-5 m-auto" encType="multipart/form-data" >
              <div class="form-group col-11 m-auto py-2">
                <select name="category_id" class="col-11 form-control rounded_5 h_2_5 m-auto shadow-sm" wire:model.defer="category_id" >
                  <option value="">انتخاب دسته</option>
                  @foreach ($categories as $c)
                    <option  value="{{$c->id}}"> {{$c->title}} </option>
                  @endforeach
                </select>
                @error('category_id') <small class="text-center text-danger d-block w-100">{{$message}}</small> @enderror
              </div>
              <div class="form-group col-11 m-auto py-2">
                <input type="text" name="h_title" class="form-control col-11 m-auto rounded_5 shadow-sm" placeholder="عنوان مقاله"  wire:model.defer="h_title" />
                @error('h_title') <small class="text-center text-danger d-block w-100">{{$message}}</small> @enderror
              </div>
              <div class="form-group col-11 m-auto py-2">
                <input type="text" name="top_title" class="form-control col-11 m-auto rounded_5 shadow-sm" placeholder="عنوان تایتل"  wire:model.defer="top_title" />
                @error('top_title') <small class="text-center text-danger d-block w-100">{{$message}}</small> @enderror
              </div>
              <div class="form-group col-11 m-auto py-2 text-center">
                توضیحات کوتاه:
                <textarea name="top_text" rows="3" class="form-control col-11 m-auto rounded shadow-sm" wire:model.defer="top_text" ></textarea>
                @error('top_text') <small class="text-center text-danger d-block w-100">{{$message}}</small> @enderror
              </div>


              {{-- <div class="form-group col-11 m-auto py-2 text-center">
                متن کامل:
                <textarea style="direction: ltr" name="text" rows="7" class="form-control col-11 m-auto rounded shadow-sm" wire:model.defer="text" ></textarea>
                @error('text') <small class="text-center text-danger d-block w-100">{{$message}}</small> @enderror
              </div> --}}

              <div class="form-group col-11 m-auto py-2 text-center" wire:ignore>
                متن کامل:
                <textarea class="form-control m-auto rounded shadow-sm" id="summary-ckeditor" data-note="@this" name="summary-ckeditor" wire:model.defer="text"></textarea>
            </div>
            @error('text') <small class="text-center text-danger d-block w-100">{{$message}}</small> @enderror



              <div class="form-group col-11 m-auto py-2 text-center">
                تصویر:
                <input type="file" name="image" class="form-control col-11 m-auto rounded_5 box_shadow_0 border-0"  wire:model.defer="image" />
                @error('image') <small class="text-center text-danger d-block w-100">{{$message}}</small> @enderror
              </div>
              <div class="image text-center">
                <img width="100" src="{{$imageUrl}}">
              </div>
              <div class="form-group col-11 m-auto py-2">
                <input type="text" name="alt_image" class="form-control col-11 m-auto rounded_5 shadow-sm" placeholder="توضیح تصویر"  wire:model.defer="alt_image" />
                @error('alt_image') <small class="text-center text-danger d-block w-100">{{$message}}</small> @enderror
              </div>
              <div class="form-group col-11 m-auto py-2">
                <input type="text" name="keywords" class="form-control col-11 m-auto rounded_5 shadow-sm" placeholder="کلمات کلیدی" wire:model.defer="keywords" />
                @error('keywords') <small class="text-center text-danger d-block w-100">{{$message}}</small> @enderror
              </div>
              <div class="form-group col-11 m-auto py-2 row justify-content-center">
                <button id="btnSubmit" type="button" class="btn btn-success rounded_5 mx-3 m-auto">
                  ویرایش مقاله
                </button>
              </div>
            </form>
        </div>



    </div>
    @endif

    @section('pagejs')
    <script src="/js/ckeditor.js"></script>
@endsection


</div>
