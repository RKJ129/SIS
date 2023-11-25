<?php

namespace App\View\Components\guru;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class updateImage extends Component
{
    /**
     * Create a new component instance.
     */
    public $guru;
    public function __construct($guru)
    {
        $this->guru = $guru;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.guru.update-image');
    }
}
