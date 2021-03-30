<div class="mt-5 pt-5">
    @include('partials.admin-menu')
    @include('partials.successMessage')
    <livewire:partials.confirm-dialog />

    <div class="container-fluid">
        <h5 class="text-center"> تعداد : {{$users->count()}}</h5>
        <table class="table table-primary table-striped table-bordered col-11 m-auto ">
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">ردیف</th>
                    <th class="text-center">سمت</th>
                    <th class="text-center">نام و نام خانوادگی</th>
                    <th class="text-center">ایمیل</th>
                    <th class="text-center">جنسیت</th>
                    <th class="text-center">تاریخ</th>
                    <th class="text-center">اکشن</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $u)
                <tr >
                    <td class="text-center">{{$u->id}}</td>
                    <td class="text-center {{$u->is_admin == 1 ? "مدیر" : "text-secondary"}}"> {{$u->is_admin == 1 ? "مدیر" : "کاربر"}} </td>
                    <td class="text-center">{{$u->name.' '.$u->lastname}}</td>
                    <td class="text-center">{{$u->email}}</td>
                    <td class="text-center">{{$u->gender == 1 ? "مرد" : "زن"}} </td>
                    <td class="text-center">{{$u->created_at->diffForHumans()}} </td>
                    <td class="text-center">
                        <i class="fas fa-times text-danger cursor_pointer_text_shadow fa-2x mx-2" wire:click="showDeleteDialog({{$u->id}})"></i>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
