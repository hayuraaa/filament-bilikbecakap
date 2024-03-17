<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = blog::get();   
        return view('frontend.blog.index', compact('blogs'));
    }

    public function show(blog $blog)
    {
        return view ('frontend.blog.show', compact('blog'));
    }
}
