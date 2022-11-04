<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cars extends Model
{
    use HasFactory;

    public function province(){

        return $this-> hasOne(province::class, 'id', 'prov_id');
    }

    public function district(){

        return $this-> hasOne(district::class, 'id', 'district_id');
    }

    public function category(){

        return $this-> hasOne(category::class, 'id', 'cat_id');
    }

    public function photos(){

        return $this->belongsTo(car_photos::class, 'id', 'car_id');
    }

    public function reservation(){

        return $this->belongsTo(reservation::class, 'id', 'car_id');
    }
}
