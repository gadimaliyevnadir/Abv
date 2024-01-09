<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Meta_tag extends Model
{
    use HasFactory;
    use HasTranslations;
    public $translatable = [
        'home_title', 'home_desc', 'home_keywords',
        'about_title', 'about_desc', 'about_keywords',
        'blog_title', 'blog_desc', 'blog_keywords',
        'contact_title', 'contact_desc', 'contact_keywords',
        'faq_title', 'faq_desc', 'faq_keywords',
        'news_title', 'news_desc', 'news_keywords',
        'photos_title','photos_desc', 'photos_keywords',
        'project_title', 'project_desc', 'project_keywords',
        'service_title', 'service_desc', 'service_keywords',
        'team_title', 'team_desc', 'team_keywords',
        'vacancy_title', 'vacancy_desc', 'vacancy_keywords',
        'videos_title', 'videos_desc', 'videos_keywords',
    ];
    protected $guarded = [];
}
