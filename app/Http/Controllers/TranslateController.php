<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TranslateController extends Controller
{
    public function index()
    {
        return view('frontend.translate');
    }
}
