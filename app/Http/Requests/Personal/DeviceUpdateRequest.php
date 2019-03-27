<?php

namespace App\Http\Requests\Personal;

use Illuminate\Foundation\Http\FormRequest;

class DeviceUpdateRequest extends FormRequest
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
            'imei'          => 'required',
            // 'slug'          => 'required|unique:devices,slug,' . $this->device,
            'marca'         => 'required',
            'numtelchip'    => 'required',
            'compania'      => 'required',
            'observaciones' => 'required',
        ];
    }
}
