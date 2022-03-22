<?php

namespace App\Http\Controllers\AuthAdmin;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
   /*
   |--------------------------------------------------------------------------
   | Login Controller
   |--------------------------------------------------------------------------
   |
   | This controller handles authenticating users for the application and
   | redirecting them to your home screen. The controller uses a trait
   | to conveniently provide its functionality to your applications.
   |
   */

   use AuthenticatesUsers;

   /**
    * Where to redirect users after login.
    *
    * @var string
    */
   protected $redirectTo = RouteServiceProvider::HOMEADMIN;

   /**
    * Create a new controller instance.
    *
    * @return void
    */
   public function __construct()
   {
      $this->middleware('guest:admin')->except('logout');
   }

   protected function guard(){
      return Auth::guard('admin');
   }

   protected function loggedOut(){
      return redirect('/admin/login');
   }

   public function showLoginForm(){
      return view('auth-admin.login');
   }
}
