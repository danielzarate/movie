<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Genre;

class GenreIndex extends Component
{
    public function render()
    {
        $genres=Genre::all();
        return view('livewire.admin.genre-index', compact('genres'))->layout('layouts.admin');
    }
}
