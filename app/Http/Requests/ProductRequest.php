<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
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
         'name' => 'required|min:3|max:150',
         'price'=> 'required|numeric',
         'status'=> 'required|numeric',
         'category_id' => 'required|exists:categories,id'
      ];
   }

   public function messages(){
      return [
         'required' => 'O campo :attribute precisa ser preenchido',
         'numeric' => 'O campo :attribute precisa ser do tipo numérico',
         'name.min'=> 'O campo nome não pode conter menos que 3 strings',
         'name.max' => 'O nome do produto não pode ser maior do que 150 caracteres',
         'category_id.exists' => 'Essa categoria não está disponível na base de dados'
      ];
   }

   public function attributes(){
      return [
         'name' => 'Nome',
         'price' => 'Preço',
         'category_id' => 'Categoria'
      ];
   }
}
