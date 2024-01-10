<?php

namespace App\Models;

use App\Traits\Langlable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Vacancy extends Model
{
    use HasFactory;
    use HasTranslations;
    use Langlable;
    public $translatable = ['desc','title'];
    protected $guarded = [];
}
