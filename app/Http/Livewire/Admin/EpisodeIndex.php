<?php

namespace App\Http\Livewire\Admin;
use Livewire\Component;
use App\Models\Episode;


class EpisodeIndex extends Component
{
    public function render()
    {
        $episodes=Episode::all();

        return view('livewire.admin.episode-index', compact('episodes'))->layout('layouts.admin');
    }
}
