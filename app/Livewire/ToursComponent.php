<?php

namespace App\Livewire;

use App\Models\Tour;
use Livewire\Component;

class ToursComponent extends Component
{
    public $tours;

    public function mount()
    {
        $this->tours = Tour::with('tourCategory', 'media')
            ->orderBy('created_at', 'desc')
            ->get();
    }

    public function render()
    {
        return view('livewire.tours-component');
    }
}