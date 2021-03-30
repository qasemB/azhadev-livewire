<div class="mt-5 pt-5">
    @include('partials.admin-menu')
    @include('partials.successMessage')
    <livewire:partials.confirm-dialog />
    <livewire:partials.edit-article-dialog />

    <div class="container-fluid">
          <table class="table table-primary table-striped table-bordered col-11 m-auto ">
            <thead class="thead-dark">
              <tr>
                <th class="text-center">#</th>
                <th class="text-center">دسته</th>
                <th class="text-center">عنوان</th>
                <th class="text-center">نویسنده</th>
                <th class="text-center">تعداد بازدید</th>
                <th class="text-center">تاریخ</th>
                <th class="text-center">وضعیت</th>
                <th class="text-center">اهمیت</th>
                <th class="text-center">اکشن</th>
              </tr>
            </thead>
            <tbody>
                @if (sizeof($articles) >0)
                @foreach ($articles as $a)
                <tr>
                    <td class="text-center">{{$a->id}}</td>
                    <td class="text-center">{{$a->category->title}}</td>
                    <td class="text-center"><a target="_blank" {{$a->is_active==1 ? "href=/article/$a->id" : ""}}> {{$a->h_title}}</a></td>
                    <td class="text-center">{{$a->writer->name.' '.$a->writer->lastname}}</td>
                    <td class="text-center">{{$a->view_count}} </td>
                    <td class="text-center">{{$a->created_at->diffForHumans()}}</td>
                    <td class="text-center cursor_pointer_text_shadow {{$a->is_active==1 ? "text-success" : "text-danger"}}" wire:click="activeArticle({{$a->id}})">{{$a->is_active==1 ? "فعال" : "غیرفعال"}} </td>
                    <td class="text-center cursor_pointer_text_shadow" wire:click="setIsBest({{$a->id}})">{{$a->is_best==1 ? "مهم" : "..."}} </td>
                    <td class="text-center">
                        <i class="fas fa-times text-danger cursor_pointer_text_shadow fa-2x mx-2" wire:click="showDeleteDialog({{$a->id}})"></i>
                        <i class="fas fa-pencil-alt text-success cursor_pointer_text_shadow fa-2x mx-2" wire:click="showEditDialog({{$a->id}})"></i>
                    </td>
                </tr>
                @endforeach
                @else
                <h5 class="text-secondary text-center">موردی نیست</h5>
                @endif
            </tbody>
          </table>
      </div>
</div>
