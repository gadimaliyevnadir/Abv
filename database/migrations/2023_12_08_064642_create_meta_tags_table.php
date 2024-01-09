<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('meta_tags', function (Blueprint $table) {
            $table->id();
            $table->longText('home_title');
            $table->longText('home_desc');
            $table->longText('home_keywords');
            $table->longText('about_title');
            $table->longText('about_desc');
            $table->longText('about_keywords');
            $table->longText('blog_title');
            $table->longText('blog_desc');
            $table->longText('blog_keywords');
            $table->longText('contact_title');
            $table->longText('contact_desc');
            $table->longText('contact_keywords');
            $table->longText('faq_title');
            $table->longText('faq_desc');
            $table->longText('faq_keywords');
            $table->longText('team_title');
            $table->longText('team_desc');
            $table->longText('team_keywords');
            $table->longText('news_title');
            $table->longText('news_desc');
            $table->longText('news_keywords');
            $table->longText('photos_title');
            $table->longText('photos_desc');
            $table->longText('photos_keywords');
            $table->longText('videos_title');
            $table->longText('videos_desc');
            $table->longText('videos_keywords');
            $table->longText('service_title');
            $table->longText('service_desc');
            $table->longText('service_keywords');
            $table->longText('project_title');
            $table->longText('project_desc');
            $table->longText('project_keywords');
            $table->longText('vacancy_title');
            $table->longText('vacancy_desc');
            $table->longText('vacancy_keywords');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meta_tags');
    }
};
