<?php

namespace App\View\Components\guru;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class update extends Component
{
    /**
     * Create a new component instance.
     */
    public $guru;
    public $dataGuru;
    public function __construct($guru, $dataGuru)
    {
        $this->guru = $guru;
        $this->dataGuru = $dataGuru;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.guru.update');
    }
}
