<?php

namespace App\Http\Requests\Docs;

use Illuminate\Foundation\Http\FormRequest;

class CharterUpdateRequest extends FormRequest
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
        $rules = [
            'user_id'       => 'required|integer',
            'are_id'        => 'required|integer',
            'zore_id'       => 'required|integer',
            'folio'         => 'required',
            // 'folio'         => 'required|unique:charters,folio,' . $this->charter,
            'detalles'      => 'required',
        ];

        if($this->get('image'))        
            $rules = array_merge($rules, ['image'         => 'mimes:jpg,jpeg,png']);

        return $rules;
    }
}
