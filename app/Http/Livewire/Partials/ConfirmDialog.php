<?php

namespace App\Http\Livewire\Partials;

use Livewire\Component;

class ConfirmDialog extends Component
{
    public $isOpen=false;
    public $subTitle='';
    public $title='';

    protected $listeners = ['showConfirmDialog'];

    public function submit()
    {
        $this->isOpen = false;
        $this->emit('submitConfirmDialog');
    }

    public function showConfirmDialog($subTitle , $title)
    {
        $this->isOpen = true;
        $this->subTitle = $subTitle;
        $this->title = $title;
    }

    public function render()
    {
        return view('livewire.partials.confirm-dialog');
    }
}
