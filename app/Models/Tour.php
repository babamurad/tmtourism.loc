<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Tour extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'base_price_cents',
        'duration_days',
        'category_id'
    ];

    protected $casts = [
        'description' => 'array',
        'base_price_cents' => 'integer',
        'duration_days' => 'integer',
        'category_id' => 'integer'
    ];
    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function tourGroups()
    {
        return $this->hasMany(TourGroup::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function media()
    {
        return $this->morphMany(Media::class, 'model');
    }
}
