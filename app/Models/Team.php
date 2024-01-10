<?php

namespace App\Models;

use App\Traits\Langlable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Team extends Model
{
    use HasFactory;
    use HasTranslations;
    use Langlable;
    public $translatable=['subtitle','desc','title'];
    protected $guarded=[];

    protected static function boot()
    {
        parent::boot();

        static::saving(function ($model) {
            if (empty($model->class1)) {
                $model->class1 =null;
            }
            if (empty($model->class2)) {
                $model->class1 = null;
            }
            if (empty($model->class3)) {
                $model->class1 = null;
            }
            if (empty($model->class4)) {
                $model->class1 = null;
            }
        });
    }
}
