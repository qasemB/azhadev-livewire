<?php

namespace App\Http\Livewire\About;

use App\Models\Ability;
use Livewire\Component;

class About extends Component
{
    public function render()
    {
        $abilities = Ability::where('is_active' , 1)->orderBy('num' , 'ASC')->get();
        return view('livewire.about.about' , ['abilities' => $abilities]);
    }
}
