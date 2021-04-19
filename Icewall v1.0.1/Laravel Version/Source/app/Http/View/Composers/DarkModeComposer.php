<?php

namespace App\Http\View\Composers;

use Illuminate\View\View;

class DarkModeComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View  $view
     * @return void
     */
    public function compose(View $view)
    {
        $view->with('dark_mode', 
            session()->has('dark_mode') ? filter_var(session('dark_mode'), FILTER_VALIDATE_BOOLEAN) : false
        );
    }
}