<?php

namespace App\Http\Livewire\Article;

use App\Models\Comment;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class ArticleComments extends Component
{
    public $article;
    public $comments;
    public $answers;
    public $text;
    public $commentIdForAnswer=0;
    public $commentSelectedForAnswer;


    public function goToAnswer($comId)
    {
        $this->commentIdForAnswer = $comId;
        $this->commentSelectedForAnswer = Comment::find($comId);
        $this->emit('goToElement' , "comment_container");
    }
    public function canselAnswer()
    {
        $this->reset([
            'text',
            'commentIdForAnswer',
            'commentSelectedForAnswer',
        ]);
    }

    public function sendComment()
    {
        $this->validate([
            'text' => 'required|regex:/^[ا-یa-zA-Z0-9\-0-9ء-ئ., \n :?؟)(،-]+$/u'
        ]);
        if ($this->commentIdForAnswer>0) {
            Comment::create([
                'user_id' => Auth::user()->id,
                'article_id' => $this->article->id,
                'text' => $this->text,
                'parent_id' => $this->commentIdForAnswer,
            ]);
        }else{
            Comment::create([
                'user_id' => Auth::user()->id,
                'article_id' => $this->article->id,
                'text' => $this->text,
            ]);
        }

        $this->canselAnswer();
        session()->flash('successMessage' , 'نظر با موفقیت ثبت شد . پس از تایید نمایش داده می شود');
        $this->emit("closeMessage" , 3000);
    }

    public function mount($article){
        $this->article = $article;
        $this->comments = $article->comments->where('parent_id' , 0);
        $this->answers = $article->comments->where('parent_id' , '>' , 0);
    }
    public function render()
    {
        return view('livewire.article.article-comments' , [
            'article' , $this->article,
            'comments' , $this->comments,
            'answers' , $this->answers,
        ]);
    }
}
