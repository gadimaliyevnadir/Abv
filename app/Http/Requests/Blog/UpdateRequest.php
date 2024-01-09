<?php

namespace App\Http\Requests\Blog;

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
            'tag_id' => 'required',
            'slug' => 'required|array',
            'desc' => 'required|array',
            'image' => 'image|mimes:jpg,png,jpeg,webp,avif,png',
        ];
    }
    public function messages(): array
    {
        return [
            'title.required' => 'Başlıq yazmaqınız Mütləqdir',
            'name.string' => 'Başlıq String Formatda olmalıdır',
            'name.min' => 'Başlıqın minimum sayı 3 olmalıdır',
            'tag_id.required' => 'Teqləri Seçməyiniz Mütləqdir',
            'slug.array' => 'Sluq Array formatında olamlıdır',
            'desc.required' => 'Mündəricat yazmaq mütləqdir',
            'desc.string' => 'Mündəricat String Formatda olmalıdır',
            "image"=>'Image Tipində Olmalıdır.'
        ];
    }
}
