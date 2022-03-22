<?php

namespace App\Http\Controllers\AuthAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;

class ForgotPasswordController extends Controller
{
   /*
   |--------------------------------------------------------------------------
   | Password Reset Controller
   |--------------------------------------------------------------------------
   |
   | This controller is responsible for handling password reset emails and
   | includes a trait which assists in sending these notifications from
   | your application to your users. Feel free to explore this trait.
   |
   */

   use SendsPasswordResetEmails;

   protected function guard(){
      return Auth::guard('admin');
   }

   public function showLinkRequestForm()
   {
      return view('auth-admin.passwords.email');
   }

   public function broker(){
      return Password::broker('admins');
   }
}
