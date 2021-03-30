<div class="mt-5 pt-5">
    @include('partials.admin-menu')
    @include('partials.successMessage')
    <livewire:partials.confirm-dialog />
    <div class="container-fluid">
        <table class="table table-primary table-striped table-bordered col-11 m-auto ">
            <thead class="thead-dark">
                <tr>
                <th class="text-center">ردیف</th>
                <th class="text-center">کاربر</th>
                <th class="text-center">برای</th>
                <th class="text-center">متن</th>
                <th class="text-center">وضعیت</th>
                <th class="text-center">اکشن</th>
                </tr>
            </thead>
            <tbody>
                @if (sizeof($comments) > 0)
                @foreach ($comments as $com)
                <tr>
                    <td class="text-center">{{$com->id}}</td>
                    <td class="text-center">{{$com->user->name.' '.$com->user->lastname}}</td>
                    <td class="text-center"> <a target="_blank" href="/article/{{$com->article_id}}">
                        <span class="text-dark">{{$com->parent_id >0 ? "پاسخ سوال" : ""}}</span>
                        {{$com->parent_id == 0 ? $com->article->h_title : $com->parent_id}} </a>
                    </td>
                    <td class="text-center">{{$com->text}}</td>
                    <td class="text-center cursor_pointer_text_shadow {{$com->is_active==1 ? "text-success" :"text-danger"}}" wire:click="activeComment({{$com->id}})">
                        {{$com->is_active==1 ? "فعال" :"غیرفعال"}}
                    </td>
                    <td class="text-center">
                        <i class="fas fa-times text-danger cursor_pointer_text_shadow fa-2x mx-2" wire:click="showDeleteDialog({{$com->id}})"></i>
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
