<?php

namespace App\Http\Livewire\Partials;

use App\Models\Article;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithFileUploads;

class EditArticleDialog extends Component
{
    use WithFileUploads;

    public $isOpen = false;
    public $categories;

    public $category_id;
    public $h_title;
    public $top_title;
    public $top_text;
    public $text;
    public $imageUrl;
    public $alt_image;
    public $keywords;
    public $articleIdToEdit=0;

    public $image;


    protected $listeners = [
        'showEditDialog',
        'submitForm'
    ];

    public function submitForm()
    {
        $this->editArticle();
    }

    public function resetProperties()
    {
        $this->reset(['isOpen','category_id','h_title','top_title','top_text','text','imageUrl','image','alt_image','keywords',]);
    }

    public function editArticle()
    {
        $this->validate([
            'category_id' => 'required|numeric',
            'h_title' => 'required|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ئ., \n :?؟)(،-]+$/u',
            'top_title' => 'required|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ئ., \n :?؟)(،-]+$/u',
            'top_text' => 'required|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ئ., \n :?؟)(،-]+$/u',
            'text' => 'required',
            'image' => 'image|max:500|nullable',
            'alt_image' => 'required|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ئ., \n :?؟)(،-]+$/u',
            'keywords' => 'required|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ئ., \n :?؟)(،-]+$/u',
        ]);

        $path=null;
        if ($this->image != null) {
            $savepath = $this->image->store('/public/image/articles/');
            $name = explode('/' , $savepath)[4];
            $path = '/storage/image/articles/'.$name;
        }

        $article = Article::find($this->articleIdToEdit);
        $article->category_id = $this->category_id;
        $article->h_title = $this->h_title;
        $article->top_title = $this->top_title;
        $article->top_text = $this->top_text;
        $article->text = $this->text;
        $article->alt_image = $this->alt_image;
        $article->keywords = $this->keywords;
        if ($path != null) {
            $article->image = $path;
        }
        $article->save();

        $this->resetProperties();
        $this->emitTo('admin.manage-article',"submitEdit");
    }

    public function showEditDialog($data)
    {
        $this->isOpen=true;
        $this->category_id=$data['category_id'];
        $this->h_title=$data['h_title'];
        $this->top_title=$data['top_title'];
        $this->top_text=$data['top_text'];
        $this->text=$data['text'];
        $this->imageUrl=$data['image'];
        $this->alt_image=$data['alt_image'];
        $this->keywords=$data['keywords'];
        $this->articleIdToEdit=$data['id'];
        $this->emit('reSetCkeditor');
    }

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function render()
    {
        return view('livewire.partials.edit-article-dialog');
    }
}
