<?php

namespace App\Http\Livewire\Index;

use App\Models\Category;
use Livewire\Component;

class TopBanner extends Component
{
    public $categories;
    public function mount()
    {
        $this->categories = Category::all();
    }
    public function render()
    {
        return view('livewire.index.top-banner' , ['categories' => $this->categories]);
    }
}
