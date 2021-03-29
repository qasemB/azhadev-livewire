<div class="mt-5 pt-5">
    @include('partials.admin-menu')
    <div class="container-fluid">
          <form class="col-12 col-md-8 text-center justify-content-center py-5 m-auto" encType="multipart/form-data" >
            <div class="form-group col-11 m-auto py-2">
              <select name="category_id" class="col-11 form-control rounded_5 h_2_5 m-auto shadow-sm" >
                <option value="">انتخاب دسته</option>
                  <option key={c.id} value={c.id}>
                    {c.title}
                  </option>
              </select>
            </div>
            <div class="form-group col-11 m-auto py-2">
              <input type="text" name="h_title" class="form-control col-11 m-auto rounded_5 shadow-sm" placeholder="عنوان مقاله" />
            </div>
            <div class="form-group col-11 m-auto py-2">
              <input type="text" name="top_title" class="form-control col-11 m-auto rounded_5 shadow-sm" placeholder="عنوان تایتل" />
            </div>
            <div class="form-group col-11 m-auto py-2 text-center">
              توضیحات کوتاه:
              <textarea name="top_text" rows="3" class="form-control col-11 m-auto rounded shadow-sm"></textarea>
            </div>
            <div class="form-group col-11 m-auto py-2 text-center">
              متن کامل:
              <textarea name="text" rows="7" class="form-control col-11 m-auto rounded shadow-sm"></textarea>
            </div>
            <div class="form-group col-11 m-auto py-2 text-center">
              تصویر:
              <input type="file" name="image" class="form-control col-11 m-auto rounded_5 box_shadow_0 border-0" />
            </div>
            <div class="form-group col-11 m-auto py-2">
              <input type="text" name="alt_image" class="form-control col-11 m-auto rounded_5 shadow-sm" placeholder="توضیح تصویر" />
            </div>
            <div class="form-group col-11 m-auto py-2">
              <input type="text" name="keywords" class="form-control col-11 m-auto rounded_5 shadow-sm" placeholder="کلمات کلیدی"/>
            </div>
            <div class="form-group col-11 m-auto py-2 row justify-content-center">
              <button class="btn btn-success rounded_5 mx-3 m-auto" >
                افزودن مقاله
              </button>
            </div>
          </form>
      </div>

</div>
