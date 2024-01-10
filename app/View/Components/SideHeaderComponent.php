<?php

namespace App\View\Components;

use App\Models\Setting;
use App\Models\Socialicon;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SideHeaderComponent extends Component
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
        $socialicons=Socialicon::all();
        $setting = Setting::firstOrFail();
        return view('components.side-header-component',compact('setting', 'socialicons'));
    }
}
