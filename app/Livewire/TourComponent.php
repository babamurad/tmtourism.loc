<?php

namespace App\Livewire;

use App\Models\Tour;
use Livewire\Component;

class TourComponent extends Component
{
    public $tour;

    public function mount($id)
    {
        $this->tour = Tour::with('tourCategory', 'media')->find($id);
        //dd($this->tour);
    }

    public function render()
    {
        return view('livewire.tour-component');
    }
}