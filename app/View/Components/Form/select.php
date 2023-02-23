<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class select extends Component
{
    public $name;
    public $value;
    public $id;
    public $option;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $name=null, $value=null, $id=null, $option=null )
    {
        $this->id       = $id;
        $this->name     = $name;
        $this->value    = $value;
        $this->option   = $option;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.select');
    }
}
