<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class DarkModeController extends Controller
{
    /**
     * Show specified view.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function switch()
    {
        session([
            'dark_mode' => session()->has('dark_mode') ? !session()->get('dark_mode') : true
        ]);

        return back();
    }
}
