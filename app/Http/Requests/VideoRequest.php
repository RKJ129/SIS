<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class VideoRequest extends FormRequest
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
            'video' => 'required|mimes:mp4|max:10000',
        ];
    }

    public function messages(): array
    {
        return [
            'judul.required' => 'Judul tidak boleh kosong!',
            'video.required' => 'Video tidak boleh kosong!',
            'video.mimes' => 'Format video harus MP4!',
            'video.max' => 'Video maksimal harus 10 MB',
        ];
    }
}
