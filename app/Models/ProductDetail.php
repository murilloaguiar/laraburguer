<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
   use HasFactory;

   protected $fillable = ['ingredients','details','products_id'];

   public function product(){
      return $this->belongsTo('App\Models\Product','products_id','id');
   }
}
