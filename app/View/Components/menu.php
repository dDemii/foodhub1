<?php

namespace App\View\Components;

use Illuminate\View\Component;

class menu extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */

    public $menus;
    public $admin;
    public function __construct($menus, $admin)
    {
        $this->menus = $menus;
        $this->admin = $admin;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.menu');
    }
}
