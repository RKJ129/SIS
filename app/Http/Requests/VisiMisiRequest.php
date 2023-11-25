<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VisiMisiRequest extends FormRequest
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
            'visi' => 'required',
            'misi' => 'required',
        ];
    }

    public function messages(): array
{
    return [
        'visi.required' => 'Visi tidak boleh kosong!',
        'misi.required' => 'Misi tidak boleh kosong!',
    ];
}
}
