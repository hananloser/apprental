<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rent_price extends Model
{
    protected $fillable = ['region' , 'price', 'car_id'];
    protected $table = 'rent_prices' ;
}
