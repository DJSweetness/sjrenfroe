<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tags extends Model
{
    public function blog_entries()
    {
        $this->belongsToMany('/app/blog_entries')->using('/app/tags_entry_ref');
    }
}
