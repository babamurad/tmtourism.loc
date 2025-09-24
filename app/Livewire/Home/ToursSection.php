<?php

namespace App\Livewire\Home;

use App\Models\Tour;
use Livewire\Component;

class ToursSection extends Component
{
    public $tours;

    public function mount()
    {
        $this->tours = Tour::with('tourCategory', 'media')
            ->whereHas('tourCategory', function($query) {
                $query->where('is_published', true);
            })
            ->limit(3)
            ->get();
    }

    public function render()
    {
        return view('livewire.home.tours-section');
    }
}
