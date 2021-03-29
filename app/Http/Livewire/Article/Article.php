<?php

namespace App\Http\Livewire\Article;

use App\Models\Article as ModelsArticle;
use Livewire\Component;

class Article extends Component
{

    public $article;

    public function mount($articleId)
    {
        $this->article = ModelsArticle::find((int)$articleId);
    }

    public function render()
    {
        return view('livewire.article.article' , ['article' , $this->article]);
    }
}
