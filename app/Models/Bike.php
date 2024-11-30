<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bike extends Model
{
    use HasFactory;
    public function reservations()
    {
        return $this->hasMany(Reservation::class);
    }
    protected $fillable = [
        'brand',
        'model',
        'engine',
        'price_per_hour',
        'status', // Add status attribute to the fillable array
    ];

}
