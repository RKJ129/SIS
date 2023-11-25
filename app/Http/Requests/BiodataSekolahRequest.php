<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BiodataSekolahRequest extends FormRequest
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
            'name' => 'required|string',
            'npsn' => 'required|numeric|digits:8',
            'akreditasi' => 'required|in:A,B,C',
            'alamat' => 'required|string',
            'kode_pos' => 'required|numeric|digits:5',
            'kelurahan' => 'required|string',
            'kecamatan' => 'required|string',
            'kota' => 'required|string',
            'provinsi' => 'required|string',
            'negara' => 'required|string',
            'email' => "required|email|unique:biodata_sekolah,email,$this->id,id",
            'no_tlpn' => 'required|min:10|max:15',
            'no_fax' => 'required|min:10|max:15',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required'             => 'Nama Sekolah tidak boleh kosong!', 
            'name.string'               => 'Nama Sekolah harus berupa huruf!',
            'npsn.required'             => 'NPSN tidak boleh kosong!',
            'npsn.numeric'              => 'NPSN harus berupa angka!',
            'npsn.digits'               => 'NPSN harus 8 digit!',
            'akreditasi.required'       => 'Akreditasi tidak boleh kosong!',
            'akreditasi.in'             => 'Akreditasi yang dipilih salah!',
            'alamat.required'           => 'Alamat tidak boleh kosong!',
            'alamat.string'             => 'Alamat harus berupa huruf!',
            'kode_pos.required'         => 'Kode Pos tidak boleh kosong!',
            'kode_pos.numeric'          => 'Kode Pos harus berupa angka!',
            'kode_pos.digits'           => 'Kode Pos harus 5 digit!',
            'kelurahan.required'        => 'Kelurahan tidak boleh kosong!',
            'kelurahan.string'          => 'Kelurahan harus berupa huruf!',
            'kecamatan.required'        => 'Kecamatan tidak boleh kosong!',
            'kecamatan.string'          => 'Kecamatan harus berupa huruf!',
            'kota.required'             => 'Kota tidak boleh kosong!',
            'kota.string'               => 'Kota harus berupa huruf!',
            'provinsi.required'         => 'Provinsi tidak boleh kosong!',
            'provinsi.string'           => 'Provinsi harus berupa huruf!',
            'negara.required'           => 'Negara tidak boleh kosong!',
            'negara.string'             => 'Negara harus berupa huruf!',
            'email.required'            => 'Email tidak boleh kosong!',
            'email.email'               => 'Email harus berupa email!!',
            'email.unique'              => 'Email sudah tersedia!!',
            'no_tlpn.required'          => 'No. Telepon tidak boleh kosong!',
            'no_tlpn.min'               => 'No. Telepon minimal 10 karakter!',
            'no_tlpn.max'               => 'No. Telepon maksimal 13 karakter!',
            'no_fax.required'           => 'No. Fax tidak boleh kosong!',
            'no_fax.min'                => 'No. Fax minimal 10 karakter!',
            'no_fax.max'                => 'No. Fax maksimal 13 karakter!',
        ];
    }
}
