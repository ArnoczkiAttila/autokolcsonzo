<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $fillable = [
        'modell',
        'kaucio',
        'kilometerdij',
        'napidij',
        'leiras',
    ];
    public function rents() {
        return $this->hasMany(Rent::class);
    }
}
