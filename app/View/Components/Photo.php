<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Photo extends Component
{
    public $portofolio;
    public function __construct($portofolio)
    {
        $this->portofolio = $portofolio;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.photo');
    }
}
