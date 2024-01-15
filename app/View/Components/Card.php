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
    public function __construct($anime)
    {
        //
        $this->title = $anime['title'];
        $this->thumbnail = $anime['thumbnail'];
        $this->episode = $anime['episode'];
        $this->type = $anime['type'];
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
