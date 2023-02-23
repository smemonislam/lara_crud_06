<?php

namespace App\View\Components\Form;

use Illuminate\View\Component;

class input extends Component
{
    public $type;
    public $name;
    public $placeholder;
    public $value;
    public $id;
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct( $type=null, $name=null, $placeholder=null, $value=null, $id=null )
    {
        $this->type         = $type;
        $this->name         = $name;
        $this->placeholder  = $placeholder;
        $this->value        = $value;
        $this->id           = $id;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.form.input');
    }
}
