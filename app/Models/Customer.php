<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'email',
        'phone',
        'full_name',
        'passport',
        'gdpr_consent_at',
    ];
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
