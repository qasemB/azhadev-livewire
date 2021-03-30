<?php

namespace App\Http\Livewire\Admin;

use App\Models\Comment;
use Livewire\Component;

class ManageComment extends Component
{
    public $comments;
    public $commentIdToDelete=0;

    protected $listeners = [
        'submitConfirmDialog',
    ];
    public function submitConfirmDialog()
    {
        $this->deleteComment();
    }
    public function deleteComment()
    {
        $this->comments = $this->comments->where('id' , '!=' , $this->commentIdToDelete );
        Comment::where('id' ,  $this->commentIdToDelete )->delete();
        session()->flash('successMessage' , 'نظر با موفقیت حذف شد');
        $this->emit("closeMessage" , 3000);
    }

    public function showDeleteDialog($comId)
    {
        $this->commentIdToDelete = $comId;
        $this->emit('showConfirmDialog','حذف نظر',"آیا از حذف نظر شماره $comId مطمئن هستید؟");
    }



    public function activeComment($comId)
    {
        $this->comments->where('id' , $comId)->first()->is_active = ($this->comments->where('id' , $comId)->first()->is_active -1)*(-1);
        $comment = Comment::find($comId);
        $comment->is_active = ($comment->is_active -1)*(-1);
        $comment->save();
    }

    public function mount()
    {
        $this->comments = Comment::orderBy('id' , 'DESC')->get();
    }
    public function render()
    {
        return view('livewire.admin.manage-comment',['comments' => $this->comments]);
    }
}
