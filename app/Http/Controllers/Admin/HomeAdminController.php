<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class HomeAdminController extends Controller
{
   //
   public function index(){
      return 'Admin logado';
   }

   public function order(){
      return 'Pedidos em aberto';
   }
}
