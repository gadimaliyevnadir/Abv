<?php

namespace App\Models;

use App\Traits\Langlable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;
use Illuminate\Support\Str;

class Blog extends Model
{
    use HasFactory;
    use HasTranslations;
    use Langlable;
    public $translatable = ['title', 'desc', 'slug'];
    protected $guarded = [];

    public function tags()
    {
        return $this->belongsToMany(Blogtag::class, 'blogs_tags', 'blog_id', 'tag_id');
    }
    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            if (empty($model->slug)) {
                $model->slug = Str::slug($model->title);
            }
        });
    }
}
