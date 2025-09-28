<?php

use Illuminate\Support\Facades\FacadeRoute;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', \App\Livewire\HomeComponent::class);

Route::get('/about', \App\Livewire\AboutPage::class);