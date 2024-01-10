<?php

namespace App\Models;

use App\Traits\Langlable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Result extends Model
{
    use HasFactory;
    use Langlable;
    use HasTranslations;
    public $translatable = ['title'];
    protected $guarded = [];
}
