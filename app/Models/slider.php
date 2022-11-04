<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class slider extends Model
{
    use HasFactory;

    public function slider_car(){

        return $this-> hasOne(cars::class, 'id', 'car_id');
    }
}
