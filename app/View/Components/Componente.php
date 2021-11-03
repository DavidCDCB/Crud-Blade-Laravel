<?php

namespace App\View\Components;

use Illuminate\View\Component;

class Componente extends Component
{
	public $parametro;
    public function __construct($parametro = "")
    {
        $this->parametro = $parametro;
    }
	public function proceso($option)
	{
		return "Proceso....";
	}
    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.Componente');
    }
}
