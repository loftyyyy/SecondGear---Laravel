<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Car extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'title', 'description', 'price', 
        'brand', 'model', 'year', 'color', 'body_type',
        'transmission', 'mileage', 'fuel_type', 'engine_capacity',
        'license_plate', 'city', 'contact_name', 'contact_email',
        'contact_phone', 'is_sold', 'is_featured', 'is_approved'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function images(): HasMany
    {
        return $this->hasMany(CarImage::class);
    }

    public function features(): HasOne
    {
        return $this->hasOne(CarFeature::class);
    }
    
    public function primaryImage()
    {
        return $this->hasOne(CarImage::class)->where('is_primary', true);
    }
    
    public function documents()
    {
        return $this->hasMany(CarImage::class)->where('type', 'document');
    }
    
    public function exteriorImages()
    {
        return $this->hasMany(CarImage::class)->where('type', 'exterior');
    }
    
    public function interiorImages()
    {
        return $this->hasMany(CarImage::class)->where('type', 'interior');
    }
}
