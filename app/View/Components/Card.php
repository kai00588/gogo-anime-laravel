<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Card extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public string $title;
    public string $thumbnail;
    public $episode;
    public string $type;
    public string $epi_id;
    public function __construct($anime)
    {
        //
        $this->title = $anime['animeTitle'];
        $this->thumbnail = $anime['animeImg'];
        $this->episode = $anime['episodeNum'];
        $this->type = $anime['subOrDub'];
        $this->epi_id = $anime['episodeId'];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.card');
    }
}
