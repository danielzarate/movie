<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class SeasonIndex extends Component
{
    public function render()
    {
        return view('livewire.admin.season-index')->layout('layouts.admin');
    }
}