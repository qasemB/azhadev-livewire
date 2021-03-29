<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return <<<'blade'
            <div class="mt-5 pt-5">
            @include('partials.admin-menu')
                <div class="container-fluid">
                    <h2 class="text-center text-info py-5 my-5">
                    یکی از موارد بالا را انتخاب کنید
                    </h2>
                </div>
            </div>
        blade;
    }
}
