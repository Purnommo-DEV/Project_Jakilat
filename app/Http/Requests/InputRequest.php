<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InputRequest extends FormRequest
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
            // 'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'min:8',  
            // 'pendidikan_terakhir' => 'required',
            // 'keahlian' => 'required',
            // 'wilayah' => 'required',
            // 'alamat' => 'required',
            // 'deskripsi_diri' => 'required',
            'nomor_hp' => 'required|max:13',
            // 'keahlian' => 'required',
        ];
    }
    public function messages()
    {
        return [
            'email.unique'    => 'E-mail Telah Terdaftar, Coba Lagi',
            'password.min'    => 'Password Minimal 5 Karakter',
            'nomor_hp.max'    => 'Nomor Hp Maksimal 13 Angka',
            'required'        => 'Wajib di isi'
        ];
    }
}
