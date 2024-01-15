<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    //
    function index () {
        $response = Http::get('https://anime-api.xyz/page-1');
        $animes = $response->json();
        return view('user.home')->with(compact('animes'));
    }
}
