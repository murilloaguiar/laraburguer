<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   use HasFactory;

   protected $fillable = ['name','price','status','category_id'];

   public function productDetail(){
      return $this->hasOne('App\Models\ProductDetail','product_id','id');
   }

   public function category(){
      return $this->belongsTo('App\Models\Category');
   }

   public function orders(){
      return $this->belongsToMany('App\Models\Order', 'product_has_orders', 'product_id', 'order_id');
   }

   public function photos(){
      return $this->hasMany('App\Models\Photo');
   }
   
}
