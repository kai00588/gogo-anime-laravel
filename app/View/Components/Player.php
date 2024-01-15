<?php

namespace App\View\Components;

use Illuminate\Support\Facades\Http;
use Illuminate\View\Component;

class Player extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public $embed;
    public function __construct($episodeId)
    {
        //
        $response = Http::get("https://gogoanime-api-production-6223.up.railway.app/vidcdn/watch/$episodeId");
        $this->embed = json_decode($response->body())->sources[0];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.player');
    }
}
