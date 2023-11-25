<?php

namespace App\View\Components\prestasi;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class detail extends Component
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
        return view('components.prestasi.detail');
    }
}
