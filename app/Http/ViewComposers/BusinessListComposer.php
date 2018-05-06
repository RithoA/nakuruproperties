<?php

namespace App\Http\ViewComposers;

use Auth;
use Illuminate\View\View;

class BusinessListComposer
{
    public function compose(View $view)
    {
        // if (!Auth::check()) {
        //     return;
        // }

        // $view->with('business', Auth::user()->business->all());
    }
}
