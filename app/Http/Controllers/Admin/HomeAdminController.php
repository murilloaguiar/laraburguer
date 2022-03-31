<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeAdminController extends Controller
{
   //
   public function index(){
      return view('admin.home');
   }

   public function order(){
      return view('admin.order.order');
   }

   public function product(){
      return view('admin.product.product');
   }

   public function category(){
      return view('admin.category.category');
   }

   




}
