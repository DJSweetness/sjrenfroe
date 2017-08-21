<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class blog_entries extends Model
{
    public function category()
    {
        $this->hasOne('/app/categories');
    }
    
    public function tags()
    {
        $this->hasMany('/app/tags');
    }
}
