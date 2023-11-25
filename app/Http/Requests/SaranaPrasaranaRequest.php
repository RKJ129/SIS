<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SaranaPrasaranaRequest extends FormRequest
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
            'sarana_prasarana' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'sarana_prasarana.required' => 'Deskripsi tidak boleh kosong!',
            'sarana_prasarana.string' => 'Deskripsi harus berupa huruf!',
        ];
    }
}
