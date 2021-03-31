<?php

namespace App\Http\Livewire\Admin;

use App\Models\Article;
use App\Models\Category;
use App\Models\Keyword;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\WithFileUploads;

class AddArticle extends Component
{
    use WithFileUploads;

    public $categories;

    public $category_id;
    public $h_title;
    public $top_title;
    public $top_text;
    public $text;
    public $image;
    public $alt_image;
    public $keywords;

    public function resetProperties()
    {
        $this->reset(['category_id','h_title','top_title','top_text','text','image','alt_image','keywords',]);
    }

    public function addArticle()
    {
        $this->validate([
            'category_id' => 'required|numeric',
            'h_title' => 'required|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ئ., \n :?؟)(،-]+$/u',
            'top_title' => 'required|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ئ., \n :?؟)(،-]+$/u',
            'top_text' => 'required|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ئ., \n :?؟)(،-]+$/u',
            'text' => 'required',
            'image' => 'required|image|max:500',
            'alt_image' => 'required|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ئ., \n :?؟)(،-]+$/u',
            'keywords' => 'required|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ئ., \n :?؟)(،-]+$/u',
        ]);

        $savepath = $this->image->store('/public/image/articles/');
        $name = explode('/' , $savepath)[4];
        $path = '/storage/image/articles/'.$name;

        $article = Article::create([
            'category_id' => $this->category_id,
            'writer_id' => Auth::user()->id,
            'writer_name' => Auth::user()->name.' '.Auth::user()->lastname,
            'h_title' => $this->h_title,
            'top_title' => $this->top_title,
            'top_text' => $this->top_text,
            'text' => $this->text,
            'image' => $path,
            'alt_image' => $this->alt_image,
            'keywords' => $this->keywords,
        ]);

        $keywordArr = explode('-' , $this->keywords);
        foreach ($keywordArr as $k) {
            Keyword::create([
                'keyword' => $k,
                'for' => $article->id,
            ]);
        }

        $this->resetProperties();
        session()->flash('successMessage' , 'مقاله با موفقیت ایجاد شد');
        $this->emit("closeMessage" , 4000);
    }

    public function mount()
    {
        $this->categories = Category::all();
    }

    public function render()
    {
        return view('livewire.admin.add-article',['categories' => $this->categories]);
    }
}
