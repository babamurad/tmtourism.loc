<?php

namespace App\Livewire\Home;

use App\Models\CultureItem;
use Livewire\Component;

class CultureSection extends Component
{
    public $cultureItems;

    public function mount()
    {
        $this->cultureItems = CultureItem::active()->ordered()->get();
    }

    public function render()
    {
        return view('livewire.home.culture-section');
    }
}
