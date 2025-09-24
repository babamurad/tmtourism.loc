<?php

namespace App\Livewire\Home;

use App\Models\Guide;
use Livewire\Component;

class GuidesSection extends Component
{
    public $guides;

    public function mount()
    {
        $this->guides = Guide::active()->ordered()->get();
    }

    public function render()
    {
        return view('livewire.home.guides-section');
    }
}
