<?php

namespace App;

use App\Car;
use App\Rent_price as Price;
use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model
{

    protected $guarded = [];
    protected $table = 'transaksis';

    public function car()
    {
        return $this->hasOne(Car::class, 'car_id', 'car_id');
    }

    public function owner(){

        return $this->hasOne(Owner::class , 'owner_id' , 'user_id');
    }

    public function price() {
        return $this->hasOne(Price::class , 'id' , 'rent_id');
    }

}
