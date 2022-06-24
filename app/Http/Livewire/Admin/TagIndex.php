<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Tag;

class TagIndex extends Component
{
    public $showTagModal=true;



    public function render()
    {
        $tags=Tag::all();
        return view('livewire.admin.tag-index',compact('tags'))->layout('layouts.admin');
    }
}
