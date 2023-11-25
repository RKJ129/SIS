<?php

namespace App\Http\Requests\Guru;

use Illuminate\Foundation\Http\FormRequest;

class UpdateGuruRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => 'required',
            'nip' => 'required|digits:18',
            'jenis_kelamin' => 'required|in:L,P', 
            'tempat_lahir' => 'required',
            'tgl_lahir' => 'required|date',
            'alamat' => 'required',
            'jabatan' => 'required|in:Guru,Tendik',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama tidak boleh kosong!',
            'nip.required' => 'NIP tidak boleh kosong!',
            'nip.digits' => 'NIP harus 18 digit!',
            'jenis_kelamin.required' => 'Jenis Kelamin tidak boleh kosong!',
            'jenis_kelamin.in' => 'Jenis Kelamin yang dipilih salah!',
            'tempat_lahir.required' => 'Tempat Lahir tidak boleh kosong!',
            'tgl_lahir.required' => 'Tanggal Lahir tidak boleh kosong!',
            'tgl_lahir.date' => 'Tanggal Lahir harus berupa tanggal!',
            'alamat.required' => 'Alamat tidak boleh kosong!',
            'jabatan.required' => 'Jabatan tidak boleh kosong!',
            'jabatan.in' => 'Jabatan yang dipilih salah!',   
        ];
    }
}
