<?php

namespace App\View\Components\Atoms;

use Illuminate\View\Component;

class Input extends Component
{
    public $type;
    public $name;
    public $value;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($type, $name, $value = null)
    {
        $this->type = $type;
        $this->name = $name;
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.atoms.input');
    }
}
