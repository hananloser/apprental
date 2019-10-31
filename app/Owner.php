<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\User ; 

class Owner extends Model
{
    
    protected $guarded = [] ; 
   
    public function users() {   
        return $this->belongsTo(User::class , 'user_id');
    }
    
}
