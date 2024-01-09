<?php

namespace App\Models;

use App\Traits\Langlable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Attribute_option extends Model
{
    use HasFactory;
    use HasTranslations;
    use Langlable;
    public $translatable = ['name'];
    protected $guarded = [];
    public function attribute()
    {
        return $this->belongsTo(Attribute::class, 'attribute_id');
    }


    public function getAttribute1(){
        return $this->hasOne(Attribute::class,'id', 'attribute_id');
    }


    public function projects()
    {
        return $this->belongsToMany(Attribute_option::class, 'attributeoptions_projects', 'project_id', 'attributeoption_id');
    }
}
