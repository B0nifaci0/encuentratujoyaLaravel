<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BranchValidate extends FormRequest
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
          'name' => 'required|string|max:200',
          'address' => 'required|string|max:350',
           'phone_number' => 'required|numeric',

        ];
    }

       public function messages(){
        return[
            'name.required' =>'El nombre de la sucursal   es requerido',
            'name.alpha' => 'Solo se admiten caracteres alfabeticos',
            'address.required' =>'La dirección   de la sucursal   es requerida',
            'address.string' => 'Solo se admiten caracteres alfabeticos',
            'phone_number.required' =>'El telefono de la sucursal  es requerido',
            'phone_number.numeric' => 'Solo se admiten caracteres numericos el telefno ',

        ];
    }
}
