<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class label extends Component
{
    public $id;
    public $label;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $id=null, $label=null )
    {
        $this->id       = $id;
        $this->label    = $label;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.label');
    }
}
