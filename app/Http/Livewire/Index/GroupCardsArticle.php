<?php

namespace App\Http\Livewire\Index;

use App\Models\Article;
use Illuminate\Support\Facades\Validator;
use Livewire\Component;

class GroupCardsArticle extends Component
{
    public $kind;
    public $articles;

    public function getArticles()
    {
        if ($this->kind == 'best') {
            $this->articles = Article::where([
                ['is_best' , 1],
                ['is_active' , 1],
            ])->take(4)->get();
        }else{
            $this->articles = Article::where('is_active' , 1)->orderBy('id' , 'DESC')->take(4)->get();
        }
    }

    public function mount($kind)
    {
        $this->kind = $kind;
        $this->getArticles();
    }

    public function render()
    {
        return view('livewire.index.group-cards-article' , [
            'kind' => $this->kind , 'articles' ,
             $this->articles,
        ]);
    }
}
