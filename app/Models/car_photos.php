<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class car_photos extends Model
{
    use HasFactory;

    public function photo(){

        return $this-> hasOne(cars::class, 'id', 'car_id');
    }
}
