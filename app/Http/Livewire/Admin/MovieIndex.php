<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Movie;

class MovieIndex extends Component
{

    public $open=false;

    public function render()
    {
        $movies=Movie::all();
        return view('livewire.admin.movie-index', compact('movies'))->layout('layouts.admin');
    }
}
