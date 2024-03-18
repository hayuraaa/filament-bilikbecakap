<?php

namespace App\Http\Controllers;
use App\Models\Pembelajaran;

use Illuminate\Http\Request;

class PembelajaranController extends Controller
{
    public function index()
    {
        $pembelajarans = Pembelajaran::get();
        return view('frontend.pembelajaran.learning', compact('pembelajarans'));
    }

    public function modul(Pembelajaran $pembelajaran)
    {

        return view('frontend.pembelajaran.modul', compact('pembelajaran'));
    }
}
