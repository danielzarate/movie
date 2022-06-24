<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\Cast;

class CastIndex extends Component
{
    public function render()
    {
        $casts=Cast::all();
        return view('livewire.admin.cast-index', compact('casts'))->layout('layouts.admin');
    }
}
