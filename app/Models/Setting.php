<?php

namespace App\Models;

use App\Traits\Langlable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Setting extends Model
{
    use HasFactory;
    use HasTranslations;
    use Langlable;
    public $translatable = ['desc','address','title','subtitle'];
    protected $guarded=[];
}
