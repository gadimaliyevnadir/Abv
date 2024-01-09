<?php

namespace App\View\Components;

use App\Models\Setting;
use App\Models\Socialicon;
use App\Models\SolutionCategory;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FooterComponent extends Component
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
        $solutioncategories = SolutionCategory::limit(4)->get();
        $socialicons=Socialicon::all();
        $setting=Setting::firstOrFail();
        return view('components.footer-component',compact('setting', 'socialicons', 'solutioncategories'));
    }
}
