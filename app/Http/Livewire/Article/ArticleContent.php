<?php

namespace App\Http\Livewire\Article;

use Livewire\Component;

class ArticleContent extends Component
{
    public $article;
    public function mount($article){
        $this->article = $article;
    }
    public function render()
    {
        return view('livewire.article.article-content' , ['article' , $this->article]);
    }
}
