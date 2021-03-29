<div class="mt-5 pt-5">
    @include('partials.admin-menu')
    @include('partials.successMessage')
    <livewire:partials.confirm-dialog />
    <livewire:partials.edit-category-dialog />
    <div class="container-fluid">
        <table class="table table-primary table-striped table-bordered col-11 m-auto ">
        <thead class="thead-dark">
            <tr>
            <th class="text-center">ردیف</th>
            <th class="text-center">آیکون</th>
            <th class="text-center">عنوان</th>
            <th class="text-center">توضیحات</th>
            <th class="text-center">اکشن</th>
            </tr>
        </thead>
        <tbody>
            @if (sizeof($categories) > 0)
                @foreach ($categories as $c)
                <tr>
                    <td class="text-center">{{$c->id}}</td>
                    <td class="text-center">
                        <i class="fa-2x {{$c->icon}}"></i>
                    </td>
                    <td class="text-center">{{$c->title}}</td>
                    <td class="text-center">{{$c->description}}</td>
                    <td class="text-center">
                        <i class="fas fa-times text-danger cursor_pointer_text_shadow fa-2x mx-2" wire:click="showDeleteDialog({{$c->id}})"></i>
                        <i class="fas fa-pencil-alt text-success cursor_pointer_text_shadow fa-2x mx-2" wire:click="showEditDialog({{$c->id}})"></i>
                    </td>
                </tr>
                @endforeach
            @else
            <h5 class=" text-center text-secondary">موردی نیست</h5>
            @endif
        </tbody>
        </table>
    </div>
</div>
