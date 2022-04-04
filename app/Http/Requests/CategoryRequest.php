<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
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
   public function rules() {
      return [
         'name'=>"required|string|max:50|min:3|unique:categories,name,$this->id"
      ];
   }

   public function messages(){
      return [
         'required'=>'O campo :attribute precisa ser preenchido',
         'name.string' => 'Digite somente caracteres',
         'name.unique' => 'A categoria digita já existe',
         'name.max' => 'O nome não pode passar de 50 caracteres',
         'name.min' => 'O nome precisa ter mais de 3 caracteres'
      ];
   }

   public function attributes(){
      return ['name' => 'Nome'];
   }
}
