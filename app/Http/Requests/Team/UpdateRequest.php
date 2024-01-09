<?php

namespace App\Http\Requests\Team;

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
            'subtitle'=> 'required|array',
            'desc' => 'required|array',
            'image' => 'image|mimes:jpg,png,jpeg,webp,avif',
            'class1'=> 'string|nullable',
            'class2' => 'string|nullable',
            'class3' => 'string|nullable',
            'class4' => 'string|nullable',
            'link1' => 'string|nullable',
            'link2' => 'string|nullable',
            'link3' => 'string|nullable',
            'link4' => 'string|nullable',
        ];
    }
}
