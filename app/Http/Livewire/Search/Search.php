<?php

namespace App\Http\Livewire\Search;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use Livewire\WithPagination;

class Search extends Component
{
    use WithPagination;
    public $categoryId;
    public $char;
    public $categories;

    public function mount($categoryId , $char="")
    {
        Validator::make(['char'=>$char] , [
            'char' => 'regex:/^[ا-یa-zA-Z0-9\-0-9ء-ئ., \n :?؟)(،-]+$/u',
        ])->validate();

        $this->categoryId = (int)$categoryId;
        $this->char = $char;
        $this->categories = Category::all();
    }

    public function render()
    {
        if ($this->categoryId >0) {
            $articles = Article::where([
                ['category_id' , (int)$this->categoryId],
                ['h_title' ,'like', "%$this->char%"],
                ['is_active' , 1],
            ])->orWhere([
                ['category_id' , (int)$this->categoryId],
                ['top_title' ,'like', "%$this->char%"],
                ['is_active' , 1],
            ])->orWhere([
                ['category_id' , (int)$this->categoryId],
                ['keywords' ,'like', "%$this->char%"],
                ['is_active' , 1],
            ])->orderBy('id' , 'DESC')->paginate(8);
        }else{
            $articles = Article::where([
                ['h_title' ,'like', "%$this->char%"],
                ['is_active' , 1],
            ])->orWhere([
                ['top_title' ,'like', "%$this->char%"],
                ['is_active' , 1],
            ])->orWhere([
                ['keywords' ,'like', "%$this->char%"],
                ['is_active' , 1],
            ])->orderBy('id' , 'DESC')->paginate(8);
        }
        return view('livewire.search.search',[
            'articles' =>$articles ,
            'categories' ,$this->categories,
         ]);
    }
}
