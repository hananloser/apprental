<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $guarded = [];
    protected $table = 'owners';
    public function cars()
    {
        return $this->hasMany(Car::class, 'owner_id', 'owner_id');
    }
}
