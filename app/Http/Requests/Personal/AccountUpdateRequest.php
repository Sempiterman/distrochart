<?php

namespace App\Http\Requests\Personal;

use Illuminate\Foundation\Http\FormRequest;

class AccountUpdateRequest extends FormRequest
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
            // 'slug'          => 'required|unique:accounts,slug,' . $this->account,
            'nameuser'      => 'required',
            'nombre'        => 'required',
            'apellidop'     => 'required',
            'apellidom'     => 'required',
            'correo'        => 'required',
            'password'      => 'required',
            'nummoviline'   => 'required',
            'observaciones' => 'required',
        ];
    }
}