<?php

namespace App\View\Components\Atoms;

use Illuminate\View\Component;

class Logo extends Component
{
    public $width;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($width = null)
    {
        $this->width = $width;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.atoms.logo');
    }
}
