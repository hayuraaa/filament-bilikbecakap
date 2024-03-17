<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Galeri;
use App\Models\Kamus;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $galeris = Galeri::get();
        $blogs = Blog::latest()->take(3)->get();
        $kamuses = Kamus::get();
        
        return view('frontend.home', compact('galeris', 'blogs', 'kamuses'));
    }
}
