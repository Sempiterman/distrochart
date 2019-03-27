<?php

namespace App\Http\Requests\Personal;

use Illuminate\Foundation\Http\FormRequest;

class EmployUpdateRequest extends FormRequest
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
            // 'user_id'         => 'required|integer',
            // 'are_id'          => 'required|integer',
            // 'municipality_id' => 'required|integer',
            // 'position_id'     => 'required|integer',
            // 'zore_id'         => 'required|integer',
            // |unique:employs,slug,' . $this->employ,
            'numempleado'     => 'required',
            'name'            => 'required',
            // 'slug'            => 'required',
            'apellidop'       => 'required',
            'apellidom'       => 'required',
            'direccion'       => 'required',
            'telefono'        => 'required',
            'correo'          => 'required',
            // 'curp'            => 'required',
            // 'rfc'             => 'required',
        ];
    }
}
