<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Photo extends Model
{
   use HasFactory;

   protected $fillable = ['image'];

   public function product(){
      return $this->belongsTo('App\Models\Product');
   }
   
}
