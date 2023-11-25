<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BeritaRequest extends FormRequest
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
            'judul' => 'required',
            'img' => 'required|image|mimes:png,jpg,jpeg,svg|max:2048',
            'description' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'judul.required' => 'Judul tidak boleh kosong!',
            'img.required' => 'Foto tidak boleh kosong!',
            'img.mimes' => 'Foto harus berupa PNG, JPG, JPEG, dan SVG!',            
            'img.max' => 'Foto maximal 2 MB!',    
            'description.required' => 'Deskripsi tidak boleh kosong!',
        ];
    }
}
