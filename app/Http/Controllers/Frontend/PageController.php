<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * @return View
     */
    public function home(): View
    {
        return view('frontend.pages.home.master');
    }
}
