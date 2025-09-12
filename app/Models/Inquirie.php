<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Inquirie extends Model
{
    protected $fillable = [
        'name',
        'email',
        'phone',
        'message',
        'ip',
        'user_agent',
    ];
}
