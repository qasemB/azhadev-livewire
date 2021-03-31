<?php

namespace App\Http\Livewire\Article;

use App\Models\Article as ModelsArticle;
use Livewire\Component;

class Article extends Component
{

    public $article;

    public function mount($articleId)
    {
        $article = ModelsArticle::find((int)$articleId);
        if ($article->last_user_view != request()->ip()) {
            $article->view_count++;
            $article->last_user_view = request()->ip();
            $article->save();
        }
        $this->article = $article;
    }

    public function render()
    {
        return view('livewire.article.article' , ['article' , $this->article]);
    }
}
