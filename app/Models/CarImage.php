<?php
// app/Models/CarImage.php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class CarImage extends Model
{
    use HasFactory;

    protected $fillable = [
        'car_id', 
        'image_path', 
        'type',
        'is_primary'
    ];

    public function car(): BelongsTo
    {
        return $this->belongsTo(Car::class);
    }
}
