<?php

namespace App\Http\Livewire\Article;

use Livewire\Component;

class Article extends Component
{

    public $articleId;

    public function mount($articleId)
    {
        $this->articleId = $articleId;
    }

    public function render()
    {
        return view('livewire.article.article');
    }
}
