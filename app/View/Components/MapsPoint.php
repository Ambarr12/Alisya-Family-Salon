<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MapsPoint extends Component
{
    public $query;
    public function __construct($query)
    {
        $this->query = str_replace(" ", "+", $query);
    }


    public function render(): View|Closure|string
    {
        return view('components.maps-point');
    }
}
