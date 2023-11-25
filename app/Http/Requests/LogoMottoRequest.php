<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LogoMottoRequest extends FormRequest
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
            'motto' => 'required|string',
            'img' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',
            'description_logo' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'motto.required' => 'Motto tidak boleh kosong!',
            'motto.string' => 'Motto harus berupa huruf!',
            'img.required' => 'Logo tidak boleh kosong!',
            'img.image' => 'Logo harus berupa gambar!',
            'img.mimes' => 'Logo harus berupa PNG, JPG, JPEG, dan SVG!',
            'img.max' => 'Maximal ukuran foto 2 MB!',
            'description_logo.required' => 'Deskripsi tidak boleh kosong!',
        ];
    }
}
