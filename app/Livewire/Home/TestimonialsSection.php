<?php

namespace App\Livewire\Home;

use App\Models\Review;
use Livewire\Component;

class TestimonialsSection extends Component
{
    public $reviews;

    public function mount()
    {
        $this->reviews = Review::with('user')
            ->whereHas('user')
            ->limit(3)
            ->get();
    }

    public function render()
    {
        return view('livewire.home.testimonials-section');
    }
}
