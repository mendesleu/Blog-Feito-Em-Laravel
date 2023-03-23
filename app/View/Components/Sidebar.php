<?php

namespace App\View\Components;

use App\Models\Categorias;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Sidebar extends Component
{
    /**
     * Create a new component instance.
     */
    public $categorias;

    public function __construct()
    {
        $this->categorias = Categorias::orderby('categoria')->get();
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sidebar');
    }
}
