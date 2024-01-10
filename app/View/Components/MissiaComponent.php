<?php

namespace App\View\Components;

use App\Models\Missia;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class MissiaComponent extends Component
{
    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        $missias=Missia::all();
        return view('components.missia-component',compact('missias'));
    }
}
