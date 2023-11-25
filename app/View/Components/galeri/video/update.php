<?php

namespace App\View\Components\galeri\video;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class update extends Component
{
    /**
     * Create a new component instance.
     */
    public $item;
    public function __construct($item)
    {
        $this->item = $item;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.galeri.video.update');
    }
}
