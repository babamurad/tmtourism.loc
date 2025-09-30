<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\CarouselSlide;

class CarouselComponent extends Component
{
    public $slides = [];

    public function mount(): void
    {
        $this->slides = CarouselSlide::getActiveSlides()
            ->map(function (CarouselSlide $slide) {
                return [
                    'image' => $slide->image,
                    'title' => $slide->title,
                    'description' => $slide->description,
                    'button_text' => $slide->button_text,
                    'button_link' => $slide->button_link,
                    'alt' => $slide->title,
                ];
            })
            ->toArray();

    }

    public function render()
    {
        return view('livewire.carousel-component');
    }
}
