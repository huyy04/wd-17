<?php

namespace App\View\Components;

use Closure;
use Illuminate\View\Component;
use Illuminate\Contracts\View\View;

class ResponsiveNavLink extends Component
{
    /**
     * Create a new component instance.
     */
    public $href;
    public $active;

    public function __construct($href, $active = false)
    {
        $this->href = $href;
        $this->active = $active;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.responsive-nav-link');
    }
}
