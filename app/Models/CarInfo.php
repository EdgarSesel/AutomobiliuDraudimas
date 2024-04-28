<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CarInfo extends Model
{
    use HasFactory;

    public function owner()
    {
        return $this->belongsTo(Car::class);
    }

    public function images()
    {
        return $this->hasMany(CarImage::class, 'car_id');
    }

protected $fillable = [
    'reg_number',
    'brand',
    'model',
    'owner_id',
];
}
