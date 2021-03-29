<div>
    @if ($isOpen)
    <div class="confirm_dialog col-11 col-md-6 col-lg-4 col-xl-3 p-2 bg-light rounded shadow animate__animated animate__bounceIn">
        <div class="w-100 text-center text-warning">
            <i class="fas fa-exclamation-circle fa-3x"></i>
        </div>
        <h5 class="text-center my-3">{{$subTitle}}</h5>
        <h6 class="text-center my-3">{{$title}}</h6>
        <div class="w-100 text-center my-2">
            <button class="btn btn-danger" wire:click="submit">تایید</button>
            <button class="btn btn-secondary" wire:click="$set('isOpen', false)">انصراف</button>
        </div>
    </div>
    @endif
</div>


