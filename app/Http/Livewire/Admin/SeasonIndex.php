<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Season;

class SeasonIndex extends Component
{
    public function render()
    {
        $seasons=Season::all();
        return view('livewire.admin.season-index',compact('seasons'))->layout('layouts.admin');
    }
}
