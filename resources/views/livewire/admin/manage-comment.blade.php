<div class="mt-5 pt-5">
    @include('partials.admin-menu')
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
                    <tr key={c.id}>
                    <td class="text-center">111</td>
                    <td class="text-center"></td>
                    <td class="text-center"> <a target="_blank" href="#">aaa </a> </td>
                    <td class="text-center">aaa</td>
                    <td
                        class="text-center cursor_pointer_text_shadow">aaa</td>
                    <td class="text-center">
                        <i class="fas fa-times text-danger cursor_pointer_text_shadow fa-2x mx-2"></i>
                    </td>
                    </tr>
                <h5 class=" text-center text-secondary">موردی نیست</h5>
            </tbody>
        </table>
    </div>
</div>
