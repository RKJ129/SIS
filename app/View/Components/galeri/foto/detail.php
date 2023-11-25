<?php

namespace App\View\Components\galeri\foto;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class detail extends Component
{
    /**
     * Create a new component instance.
     */
    public $item;
    public $datas;
    public function __construct($item, $datas)
    {
        $this->item = $item;
        $this->datas = $datas;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.galeri.foto.detail');
    }
}
