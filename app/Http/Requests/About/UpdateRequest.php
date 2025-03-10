<?php

namespace App\Http\Requests\About;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|array',
            'desc' => 'required|array',
            'image1' => 'image|mimes:jpg,png,jpeg,webp,avif',
            'image2' => 'image|mimes:jpg,png,jpeg,webp,avif',
            'image3' => 'image|mimes:jpg,png,jpeg,webp,avif',
        ];
    }
}
