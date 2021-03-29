<?php

namespace App\Http\Livewire\Admin;

use App\Models\Article;
use App\Models\Category;
use Livewire\Component;

class ManageCategory extends Component
{
    public $catIdToDelete=0;

    protected $listeners = [
        'submitConfirmDialog',
        'submitEdit',
    ];

    public function submitEdit()
    {
        $this->render();
        session()->flash('successMessage' , 'گروه با موفقیت ویرایش  شد');
        $this->emit("closeMessage" , 4000);
    }

    public function showEditDialog($catId)
    {
        $category = Category::find($catId);
        $this->emitTo('partials.edit-category-dialog' , 'showEditDialog' ,$category);
    }

    public function submitConfirmDialog()
    {
        $this->deleteCategory();
    }

    public function deleteCategory()
    {
        Category::where('id' ,  $this->catIdToDelete )->delete();
        Article::where('category_id' , $this->catIdToDelete)->delete();
        session()->flash('successMessage' , 'گروه با موفقیت حذف شد');
        $this->emit("closeMessage" , 3000);
    }

    public function showDeleteDialog($catId)
    {
        $this->catIdToDelete = $catId;
        $this->emit('showConfirmDialog','حذف گروه','پس از حذف گروه ، تمام مقالات مربوطه نیز حذف می شوند آیا مطمئن هستید؟');
    }

    public function render()
    {
        $categories = Category::orderBy('id' , 'DESC')->get();
        return view('livewire.admin.manage-category',[
           'categories'=>$categories,
        ]);
    }
}
