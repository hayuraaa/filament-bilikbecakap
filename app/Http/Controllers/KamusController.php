<?php

namespace App\Http\Controllers;

use App\Models\Kamus;
use Illuminate\Http\Request;

class KamusController extends Controller
{
    public function index()
    {
        $kamuses = kamus::get();
        return view('frontend.kamus',compact('kamuses'));
    }
}
