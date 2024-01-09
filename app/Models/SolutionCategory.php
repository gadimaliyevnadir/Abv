<?php

namespace App\Models;

use App\Traits\Langlable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class SolutionCategory extends Model
{
    use HasFactory;
    use HasTranslations;
    use Langlable;
    public $translatable = ['title'];
    protected $guarded = [];
    public function solutionsubcategory()
    {
        return $this->hasMany(Solutionsubcategory::class, 'category_id');
    }
}
