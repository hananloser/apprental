<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $guarded = [];
    protected $table = 'cars';


    public function owner()
    {
        return $this->belongsTo(Owner::class, 'owner_id', 'owner_id');
    }

    public function price(){
        return $this->hasMany(Rent_price::class , 'car_id' , 'car_id');
    }
}
