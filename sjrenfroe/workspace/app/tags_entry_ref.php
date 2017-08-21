<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tags_entry_ref extends Model
{
    public function tags()
    {
        $this->hasMany('/app/tags');
    }
    
    public function blog_entries()
    {
        $this->hasMany('/app/blog_entries');
    }
}
