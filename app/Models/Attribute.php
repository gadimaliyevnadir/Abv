<?php

namespace App\Models;

use App\Traits\Langlable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Attribute extends Model
{
    use HasFactory;
    use Langlable;
    use HasTranslations;
    public $translatable = ['name'];
    protected $guarded = [];
    public function attributeOption()
    {
        return $this->hasMany(Attribute_option::class, 'attribute_id');
    }

}
