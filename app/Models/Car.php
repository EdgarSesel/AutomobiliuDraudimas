<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'surname', 'phone', 'email', 'user_id'];
    public function CarInfo()
    {
        return $this->hasMany(CarInfo::class, 'owner_id');

    }
}
