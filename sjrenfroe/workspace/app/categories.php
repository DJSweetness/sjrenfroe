<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categories extends Model
{
    public function blog_entries()
    {
        $this->belongsToMany('/app/blog_entries');
    }
}
