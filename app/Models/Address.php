<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
   use HasFactory;

   public function users(){
      return $this->belongsToMany('App\Models\User','user_has_addresses', 'address_id','user_id');
   }
}
