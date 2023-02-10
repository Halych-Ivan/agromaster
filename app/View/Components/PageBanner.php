<?php

namespace App\View\Components;

use Illuminate\View\Component;

class PageBanner extends Component
{
    public $title;
    public $img;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($title, $img)
    {
        $this->title = $title;
        $this->img = $img;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.page-banner');
    }
}
