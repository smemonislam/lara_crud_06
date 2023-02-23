<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class btn extends Component
{
    public $type;
    public $class;
    public $value;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $type=null, $class=null, $value=null )
    {
        $this->type   = $type;
        $this->class  = $class;
        $this->value  = $value;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.btn');
    }
}
