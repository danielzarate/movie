<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Serie;

class SerieIndex extends Component
{
    public function render()
    {

        $series=Serie::all();
        return view('livewire.admin.serie-index',compact('series'))->layout('layouts.admin');
    }
}
