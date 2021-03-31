<?php

namespace App\Http\Livewire\Admin;

use App\Models\Article;
use App\Models\Comment;
use App\Models\Keyword;
use Livewire\Component;

class ManageArticle extends Component
{
    public $articles;
    public $articleIdToDelete=0;



    protected $listeners = [
        'submitConfirmDialog',
        'submitEdit',
    ];

    public function submitEdit()
    {
        $this->render();
        session()->flash('successMessage' , 'مقاله با موفقیت ویرایش  شد');
        $this->emit("closeMessage" , 4000);
    }

    public function showEditDialog($articleId)
    {
        $article = Article::find($articleId);
        $this->emitTo('partials.edit-article-dialog' , 'showEditDialog' ,$article);
    }

    public function submitConfirmDialog()
    {
        $this->deleteArticle();
    }

    public function deleteArticle()
    {
        $this->articles = $this->articles->where('id' , '!=' , $this->articleIdToDelete );

        Article::where('id' ,  $this->articleIdToDelete )->delete();
        Comment::where('article_id' , $this->articleIdToDelete)->delete();
        Keyword::where('for' , $this->articleIdToDelete)->delete();

        session()->flash('successMessage' , 'مقاله با موفقیت حذف شد');
        $this->emit("closeMessage" , 3000);
    }

    public function showDeleteDialog($articleId)
    {
        $this->articleIdToDelete = $articleId;
        $this->emit('showConfirmDialog','حذف مقاله','پس از حذف مقاله ، تمام متعلقات نیز حذف می شوند. آیا مطمئن هستید؟');
    }





    public function setIsBest($articleId)
    {
        $this->articles->where('id' , $articleId)->first()->is_best = ($this->articles->where('id' , $articleId)->first()->is_best -1)*(-1);
        $article = Article::find($articleId);
        $article->is_best = ($article->is_best-1)*(-1);
        $article->save();
    }

    public function activeArticle($articleId)
    {
        $this->articles->where('id' , $articleId)->first()->is_active = ($this->articles->where('id' , $articleId)->first()->is_active -1)*(-1);
        $article = Article::find($articleId);
        $article->is_active = ($article->is_active-1)*(-1);
        $article->save();
    }

    public function getAllArticles()
    {
        $this->articles = Article::orderBy('id','DESC')->get();
    }

    public function mount()
    {
        $this->getAllArticles();
    }

    public function render()
    {
        return view('livewire.admin.manage-article' , ['articles' , $this->articles]);
    }
}
