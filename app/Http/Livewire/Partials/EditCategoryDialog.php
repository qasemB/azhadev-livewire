<?php

namespace App\Http\Livewire\Partials;

use App\Models\Category;
use Livewire\Component;

class EditCategoryDialog extends Component
{
    public $isOpen=false;
    public $title='';
    public $description='';
    public $icon='';
    public $categoryId=0;

    protected $listeners = [
        'showEditDialog',
    ];

    public function editCategory()
    {
        $this->validate([
            'title'=> 'required|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ئ., \n :?؟)(،-]+$/u',
            'description'=> 'required|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ئ., \n :?؟)(،-]+$/u',
            'icon'=> 'required|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ئ., \n :?؟)(،-]+$/u',
        ]);
        Category::where('id' , $this->categoryId)->update([
            'title' => $this->title,
            'description' => $this->description,
            'icon' => $this->icon,
        ]);
        $this->reset(
            'isOpen',
            'title',
            'description',
            'icon',
        );
        $this->emitTo('admin.manage-category',"submitEdit");
    }


    public function showEditDialog($data)
    {
        $this->isOpen=true;
        $this->title= $data['title'];
        $this->description= $data['description'];
        $this->icon= $data['icon'];
        $this->categoryId= $data['id'];
    }

    public function render()
    {
        return view('livewire.partials.edit-category-dialog');
    }
}
