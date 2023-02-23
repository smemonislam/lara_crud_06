<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class form extends Component
{
    public $class;
    public $action;
    public $method;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $class=null, $action=null, $method=null )
    {
        $this->class    = $class;
        $this->action   = $action;
        $this->method   = $method;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.form');
    }
}
