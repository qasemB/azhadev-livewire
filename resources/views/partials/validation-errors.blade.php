@if ($errors->any())
<div class="text-danger">
    <ul class="px-0">
        @foreach ($errors->all() as $error)
        <li class="text-center" ><small>{{$error}}</small></li>
        @endforeach
    </ul>
</div>
@endif
