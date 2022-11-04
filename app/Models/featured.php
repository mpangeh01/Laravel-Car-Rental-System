<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class featured extends Model
{
    use HasFactory;

    public function featured_car(){

        return $this-> hasOne(cars::class, 'id', 'car_id');
    }
}
