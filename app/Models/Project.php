<?php

namespace App\Models;

use App\Traits\Langlable;
use App\Traits\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Translatable\HasTranslations;

class Project extends Model
{
    use HasFactory;
    use HasTranslations;
    use Langlable;
    use Sluggable;
    public $translatable=['title','desc','slug'];
    protected $guarded=[];
    public function attribute_options()
    {
        return $this->belongsToMany(Attribute_option::class, 'attributeoptions_projects', 'project_id', 'attributeoption_id');
    }
}
