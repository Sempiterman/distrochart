<?php

namespace App\Http\Requests\Docs;

use Illuminate\Foundation\Http\FormRequest;

class KitStoreRequest extends FormRequest
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
            'user_id'       => 'required|integer',
            'employ_id'     => 'required|integer',
            'folio'         => 'required|unique:kits,folio',
            'chaleco'       => 'required|in:SI,NO', 
            'mochila'       => 'required|in:SI,NO', 
            'gafete'        => 'required|in:SI,NO', 
            'rotafolio'     => 'required|in:SI,NO', 
            'manuales'      => 'required|in:SI,NO', 
            'sombrero'      => 'required|in:SI,NO', 
            'portahojas'    => 'required|in:SI,NO', 
            'utileria'      => 'required|in:SI,NO',
            'detalles'      => 'required',
        ];
    }
}
