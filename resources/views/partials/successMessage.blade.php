@if (session()->has('successMessage'))
<style>
    .alert_message{
        position: fixed;
        bottom: 1rem;
        padding: 0.5rem 2rem;
        z-index: 10000;
        box-shadow: 0 0 5px rgb(19, 78, 7)
    }
</style>
<div class="message_container container-fluid animate__animated animate__fadeIn">
    <div dir="rtl" class=" row justify-content-center align-items-center">
        <div class=" m-auto alert_message alert_message_success bg-success text-light rounded col-11 col-md-6 col-lg-5">
            <h5 class="row align-items-center justify-content-center mb-0">
                {{session('successMessage')}}
                <i class="far fa-check-circle fa-2x mx-2"></i>
            </h5>
        </div>
    </div>
</div>
@endif
