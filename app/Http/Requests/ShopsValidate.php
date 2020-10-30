<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopsValidate extends FormRequest
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
          'web_site' => 'required|string|max:350',
           'email' => 'required|email',
            'phone_number' => 'required',
            'description' => 'required|string|max:800',
        ];
    }


      public function messages(){
        return[
            'name.required' =>'El nombre de la tienda  es requerido',
            'name.alpha' => 'Solo se admiten caracteres alfabeticos en nombre ',
            'web_site.required' =>'Nombre de la  pagina web es requerido',
            'web_site.string' => 'Solo se admiten caracteres alfabeticos',
            'email.required' =>'El nombre del producto  es requerida',
            'email.email' =>'El correo electronico  ya existe o no es correcto',
            'phone_number.required' =>'El telefono  es requerido',
            'phone_number.numeric' => 'Solo se adminen caracteres alfabeticos',
            'description.required' =>'La descripcioón  de la tienda  es requerida',

        ];
    }
}
