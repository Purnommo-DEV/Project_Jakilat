<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InputRequestProyek extends FormRequest
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
            'berkas' => 'required|max:2048'
        ];
    }
    public function messages()
    {
        return [
            'berkas.max'      => 'Ukuran tidak boleh lebih dari 2 MB'
        ];
    }
}
