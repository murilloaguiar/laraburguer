<?php

namespace App\Http\Controllers\User;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeUserController extends Controller{

   public function index(){
      return 'bem vindo '.Auth::user()->name;
   }

   public function getUserId(){
      return response()->json(auth()->user()->id);
   }
}