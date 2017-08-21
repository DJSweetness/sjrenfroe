<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\blog_entries;
use App\categories;

class blogEntryController extends Controller
{
    public function getMostRecentBlogEntry()
    {
        //Fetch posts and Paginate
        $singleEntry = blog_entries::orderBy('created_at', 'desc')->first();
        
        if (!$singleEntry)
            return view('index');
        else
            return view('index', ['singleEntry' => $singleEntry]);
    }
}