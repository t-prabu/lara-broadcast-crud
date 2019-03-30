<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Networks extends Model
{
   protected $fillable = ['name', 'network_id'];
       public function comments()
    {
        return $this->hasMany('App\Numbers');
    }
}
