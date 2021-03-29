<?php

namespace App\Http\Livewire\Admin;

use App\Models\Category;
use Livewire\Component;

class AddCategory extends Component
{
    public $title ="";
    public $description ="";
    public $icon ="";

    public function addCategory()
    {
        $this->validate([
            'title'=> 'required|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ئ., \n :?؟)(،-]+$/u',
            'description'=> 'required|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ئ., \n :?؟)(،-]+$/u',
            'icon'=> 'required|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ئ., \n :?؟)(،-]+$/u',
        ]);
        Category::create([
            'title' => $this->title,
            'description' => $this->description,
            'icon' => $this->icon,
        ]);
        $this->reset(
            'title',
            'description',
            'icon',
        );
        session()->flash('successMessage' , 'گروه با موفقیت ایجاد شد');
        $this->emit("closeMessage" , 3000);

    }

    public function render()
    {
        return view('livewire.admin.add-category');
    }
}
