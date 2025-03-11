<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarFeature extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id',
        'driver_airbag',
        'passenger_airbag',
        'brake_assist',
        'security_alarm',
        'traction_control',
        'central_locking',
        'immobilizer'
    ];

    protected $casts = [
        'driver_airbag' => 'boolean',
        'passenger_airbag' => 'boolean',
        'brake_assist' => 'boolean',
        'security_alarm' => 'boolean',
        'traction_control' => 'boolean',
        'central_locking' => 'boolean',
        'immobilizer' => 'boolean',
    ];

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
