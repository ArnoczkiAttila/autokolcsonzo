<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rent extends Model
{
    protected $fillable = [
        'car_id',
        'email',
        'kezdet',
        'vege',
    ];
    public function car() {
        return $this->belongsTo(Car::class);
    }
}
