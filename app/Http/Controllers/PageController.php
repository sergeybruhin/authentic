<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * @return View
     */
    public function home(): View
    {
        return view('pages.home.master');
    }
}
