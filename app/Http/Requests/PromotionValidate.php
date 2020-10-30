<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PromotionValidate extends FormRequest
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
    public function rules()
    {
           return [
          'name' => 'required|alpha|max:200',
          'description' => 'required|string',
           'terms' => 'required|string',

        ];
    }
     public function messages(){
        return[
            'name.required' =>'El nombre de la sucursal   es requerido',
            'name.alpha' => 'Solo se admiten caracteres alfabeticos en la descripción',
            'description.required' =>'La dirección   de la sucursal   es requerida',
            'description.string' => 'Solo se admiten caracteres alfabeticos',
            'terms.required' =>'Las condiciones  de la promoción es requerido',
            'terms.string' => 'Solo se admiten caracteres alfanumericos en las condiciones de la promoción ',



        ];
    }
}
