<?php

namespace App\Livewire\Home;

use App\Models\Route;
use Livewire\Component;

class RoutesSection extends Component
{
    public $routes;

    public function mount()
    {
        $this->routes = Route::active()->ordered()->get();
    }

    public function render()
    {
        return view('livewire.home.routes-section');
    }
}
