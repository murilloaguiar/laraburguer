<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateProductDetailRequest extends FormRequest
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
         'ingredients' => 'nullable|min:3|max:300',
         'details' => 'required|min:3|max:400',
         'product_id' => ['required','exists:products,id','integer']
      ];
   }

   public function messages(){
      return [
         'required' => 'Por favor forneça o valor do campo :attribute',
         'min' => 'O campo :attribute precisa ter pelo menos 3 caracteres',
         'product_id.unique' => 'Já existe detalhes para este produto',
         'product_id.exists' => 'O produto selecionado não está cadastrado',
         'integer' => 'Por favor informe um valor numérico para o campo :attribute'
      ];
   }

   public function attributes(){
      return [
         'ingredients' => 'ingredientes',
         'details' => 'detalhes',
         'product_id' => 'produto'
      ];
   }
}
