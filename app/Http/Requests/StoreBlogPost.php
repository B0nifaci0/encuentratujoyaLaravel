<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreBlogPost extends FormRequest
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
        ];
    }


    public function messages(){
        return[
            'name.required' =>'La categoria es requerida',
            'name.string' => 'Solo se adminen caracteres alfabeticos'
        ];
    }
}
