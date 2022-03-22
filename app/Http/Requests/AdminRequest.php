<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminRequest extends FormRequest
{
   /**
    * Determine if the user is authorized to make this request.
    *
    * @return bool
    */
   public function authorize()
   {
      return true;
   }

   /**
    * Get the validation rules that apply to the request.
    *
    * @return array
    */
   public function rules(){
      return [
         'name' => 'required|max:50|min:3|string',
         'lastname' => 'required|max:50|min:3|string',
         'email' => "required|max:150|email|unique:admins,id,$this->id",
         'password' => 'required|min:6',
         'status' => 'required|numeric'
      ];
   }

   public function messages(){
      return [
         'required' => 'O campo :attribute precisa ser informado',
         'string' => 'O campo :attribute só pode conter letras',
         'numeric' => 'O campo :attribute só pode conter números',
         'name.max' => 'Informe o primeiro nome com menos de 50 caracteres',
         'lastname.max' => 'Informe o último sobrenome nome com menos de 50 caracteres',
         'email.max' => 'Informe um email com menos de 150 caracteres',
         'name.min' => 'O primeiro nome precisa ter mais de 3 caracteres',
         'lasname.min' => 'O ultimo sobrenome precisa ter mais de 3 caracteres',
         'password.min' => 'A senha a ser cadastrada precisa ter mais de 6 caracteres',
         
      ];
   }
}
