<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;

    public function user(){

        return $this-> hasOne(User::class, 'id', 'user_id');
    }

    public function district(){

        return $this-> hasOne(district::class, 'id', 'pick_up_location');
    }

    public function car(){

        return $this-> hasOne(cars::class, 'id', 'car_id');
    }
}
