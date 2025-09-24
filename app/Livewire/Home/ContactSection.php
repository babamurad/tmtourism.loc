<?php

namespace App\Livewire\Home;

use App\Models\ContactInfo;
use Livewire\Component;

class ContactSection extends Component
{
    public $contactInfos;
    public $name = '';
    public $email = '';
    public $tourDate = '';
    public $message = '';

    public function mount()
    {
        $this->contactInfos = ContactInfo::active()->ordered()->get();
    }

    public function submitForm()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'message' => 'required|string|max:1000',
            'tourDate' => 'nullable|date|after:today'
        ]);

        // Здесь можно добавить логику отправки формы
        // Например, сохранение в базу данных или отправка email
        
        session()->flash('message', 'Спасибо! Ваша заявка принята. Мы свяжемся с вами в ближайшее время.');
        
        $this->reset(['name', 'email', 'tourDate', 'message']);
    }

    public function render()
    {
        return view('livewire.home.contact-section');
    }
}
