<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'modell',
        'kaucio',
        'kilomter',
        'napidij',
        'leiras',
    ];
    public function rents() {
        return $this->hasMany(Rent::class);
    }
}
