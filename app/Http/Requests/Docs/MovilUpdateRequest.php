<?php

namespace App\Http\Requests\Docs;

use Illuminate\Foundation\Http\FormRequest;

class MovilUpdateRequest extends FormRequest
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
            // 'user_id'   => 'required|integer',
            // 'employ_id' => 'required|integer',
            // 'folio'     => 'required|unique:movils,folio,' . $this->movil,
            'folio'  => 'required',
            'audifonos' => 'required|in:SI,NO', 
            'cargador'  => 'required|in:SI,NO', 
            'cable'     => 'required|in:SI,NO', 
            'estado'    => 'required|in:BUENO,REGULAR,MALO', 
            'bateria'   => 'required|in:SI,NO', 
            'chip'      => 'required|in:SI,NO', 
            'dysplay'   => 'required|in:BUENO,NO FUNCIONAL,ESTRELLADO', 
            'detalles'  => 'required',
        ];
    }
}
