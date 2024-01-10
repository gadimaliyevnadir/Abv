<?php

namespace App\View\Components;

use App\Models\Result;
use App\Models\ResultTitle;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FunfactComponent extends Component
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
        $resulttitle=ResultTitle::firstOrFail();
        $results=Result::all();
        return view('components.funfact-component',compact('resulttitle','results'));
    }
}
