<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNeighborhood extends FormRequest
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
            'neighborhood' => 'required|max:45'
        ];
    }

    //cambio el nombre del atributo
    public function attributes()
    {
        return[
            'neighborhood' => 'Nombre',
        ];
    }

    //cambio el mensaje
    /*
    public function messages()
    {
        return[
            'neighborhood.required' => 'Salame'
        ];
    }*/
}
