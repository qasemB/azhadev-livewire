<div class="mt-5 pt-5">
    @include('partials.admin-menu')
    @include('partials.successMessage')
    <div class="container-fluid">
        <form class="col-12 col-md-8 text-center justify-content-center py-5 m-auto" >
            <div class="form-group col-11 m-auto py-2">
              <input type="text" name="title" class="form-control col-11 m-auto rounded_5 shadow-sm" placeholder="عنوان دسته"  wire:model.defer="title"/>
              @error('title') <small class="text-center text-danger d-block w-100">{{$message}}</small> @enderror
            </div>
            <div class="form-group col-11 m-auto py-2">
              <input type="text" name="description" class="form-control col-11 m-auto rounded_5 shadow-sm" placeholder="توضیخات دسته"  wire:model.defer="description"/>
              @error('description') <small class="text-center text-danger d-block w-100">{{$message}}</small> @enderror
            </div>
            <div class="form-group col-11 m-auto py-2">
              <input type="text" name="icon" class="form-control col-11 m-auto rounded_5 shadow-sm" placeholder="فوت آسم دسته"  wire:model.defer="icon"/>
              @error('icon') <small class="text-center text-danger d-block w-100">{{$message}}</small> @enderror
            </div>
            <div class="form-group col-11 m-auto py-2 row justify-content-center">
              <button type="button" class="btn btn-success rounded_5 mx-3 m-auto" wire:click="addCategory">
                افزودن دسته
              </button>
            </div>
        </form>
      </div>
</div>
