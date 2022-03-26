<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class TestiController extends Controller
{
    //
    function index()
    {
        $testimoni= Http::get("http://localhost:4000/testimoni/findall");
        // ->json()['data'];

        return view('dashboard', 
        ['testimoni' => $testimoni['data']]);
        
    }
}
