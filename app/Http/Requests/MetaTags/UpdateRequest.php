<?php

namespace App\Http\Requests\MetaTags;

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
            'home_title' => 'required|array',
            'home_desc' => 'required|array',
            'home_keywords' => 'required|array',
            'about_title' => 'required|array',
            'about_desc' => 'required|array',
            'about_keywords' => 'required|array',
            'blog_title' => 'required|array',
            'blog_desc' => 'required|array',
            'blog_keywords' => 'required|array',
            'contact_title' => 'required|array',
            'contact_desc' => 'required|array',
            'contact_keywords' => 'required|array',
            'faq_title' => 'required|array',
            'faq_desc' => 'required|array',
            'faq_keywords' => 'required|array',
            'news_title' => 'required|array',
            'news_desc' => 'required|array',
            'news_keywords' => 'required|array',
            'photos_title' => 'required|array',
            'photos_desc' => 'required|array',
            'photos_keywords' => 'required|array',
            'project_title' => 'required|array',
            'project_desc' => 'required|array',
            'project_keywords' => 'required|array',
            'service_title' => 'required|array',
            'service_desc' => 'required|array',
            'service_keywords' => 'required|array',
            'team_title' => 'required|array',
            'team_desc' => 'required|array',
            'team_keywords' => 'required|array',
            'videos_title' => 'required|array',
            'videos_desc' => 'required|array',
            'videos_keywords' => 'required|array',
            'vacancy_title' => 'required|array',
            'vacancy_desc' => 'required|array',
            'vacancy_keywords' => 'required|array',
        ];
    }
}
