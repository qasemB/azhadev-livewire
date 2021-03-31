<?php

namespace App\Http\Livewire;

use App\Models\Keyword;
use App\Models\Thing;
use Livewire\Component;

class Footer extends Component
{
    public $keywords;
    public $things;

    public function mount()
    {
        $this->things = Thing::all();
        $count =4;
        if (Keyword::all()->count() < 4) {
            $count = Keyword::all()->count();
        }
        $this->keywords = Keyword::all()->random($count);
    }

    public function render()
    {
        return view('livewire.footer' , [
            'keywords'=> $this->keywords,
            'things'=> $this->things,
        ]);
    }
}
