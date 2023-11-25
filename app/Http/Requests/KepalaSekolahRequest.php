<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class KepalaSekolahRequest extends FormRequest
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
            'img' => 'image|mimes:png,jpg,jpeg,svg|max:2048',
            'description' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Nama tidak boleh kosong!',
            'img.image' => 'Foto harus berupa gambar!',
            'img.mimes' => 'Foto harus berupa PNG, JPG, JPEG, dan SVG!',
            'img.max' => 'Maximal ukuran foto 2 MB!',
            'description.required' => 'Deskripsi tidak boleh kosong!'
        ];
    }
}
