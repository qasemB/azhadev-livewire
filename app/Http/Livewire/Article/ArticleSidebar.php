<?php

namespace App\Http\Livewire\Article;

use Livewire\Component;

class ArticleSidebar extends Component
{
    public $article;
    public function mount($article){
        $this->article = $article;
    }
    public function render()
    {
        return view('livewire.article.article-sidebar' , ['article' , $this->article]);
    }
}
