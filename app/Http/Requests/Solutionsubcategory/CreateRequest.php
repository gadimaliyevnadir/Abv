<?php

namespace App\Http\Requests\Solutionsubcategory;

use Illuminate\Foundation\Http\FormRequest;

class CreateRequest extends FormRequest
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
            'link'=>'required|string',
            'image' => 'required|image|mimes:jpg,png,jpeg,webp,avif,svg,',
            'category_id'=>'required|integer'
        ];
    }
}
