<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function blogList()
    {
        return view('blog_list');
    }

    public function blogDetails()
    {
        echo "blog details";
    }
}
