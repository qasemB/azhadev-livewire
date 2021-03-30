<?php

namespace App\Http\Livewire\Admin;

use App\Models\User;
use Livewire\Component;

class ManageUsers extends Component
{
    public $users;
    public $userIdToDelete=0;

    protected $listeners = [
        'submitConfirmDialog',
    ];
    public function submitConfirmDialog()
    {
        $this->deleteUser();
    }
    public function deleteUser()
    {
        $this->users = $this->users->where('id' , '!=' , $this->userIdToDelete );
        User::where('id' ,  $this->userIdToDelete )->delete();
        session()->flash('successMessage' , 'کاربر با موفقیت حذف شد');
        $this->emit("closeMessage" , 3000);
    }

    public function showDeleteDialog($userId)
    {
        $this->userIdToDelete = $userId;
        $this->emit('showConfirmDialog','حذف کاربر',"آیا از حذف کاربر شماره $userId مطمئن هستید؟");
    }



    public function mount()
    {
        $this->users = User::orderBy('id' , 'DESC')->get();
    }

    public function render()
    {
        return view('livewire.admin.manage-users',['users'=>$this->users]);
    }
}
