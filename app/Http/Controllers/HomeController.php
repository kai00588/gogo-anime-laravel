<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

use function PHPSTORM_META\type;

class HomeController extends Controller
{
    //
    function index (Request $request) {
        $page = 1;
        $type = 1;
        if($request->page) {
            if($request->type){
                $type = $request->type;
            }
            $response = Http::get("https://gogoanime-api-production-6223.up.railway.app/recent-release?page=".$request->page."&type=$type");
            $animes = $response->json();
            $page = $request->page;
        }
        else{
            if($request->type) {
                $type = $request->type;
            }
            $response = Http::get('https://gogoanime-api-production-6223.up.railway.app/recent-release?page-1&type='.$type);
            $animes = $response->json();
        }
        $epi = false;
        return view('user.home')->with(compact('animes','page','epi'));
    }
    function episode($slug) {
        $id = explode('-episode-',$slug)[0];
        $response = Http::get("https://gogoanime-api-production-6223.up.railway.app/anime-details/$id");
        $anime = $response->json();
        $epi = true;
        return view('user.episode')->with(compact('anime','id','slug','epi'));
    }
}
