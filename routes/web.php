<?php

use Illuminate\Support\Facades\FacadeRoute;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', \App\Livewire\HomeComponent::class);
use App\Livewire\ToursComponent;

Route::get('/tours', ToursComponent::class)->name('tours');
use App\Livewire\TourComponent;

Route::get('/tours/{id}', TourComponent::class)->name('tour');