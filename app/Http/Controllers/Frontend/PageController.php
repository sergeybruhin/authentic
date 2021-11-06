<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * @param Request $request
     * @return View
     */
    public function home(Request $request): View
    {
        return view('frontend.pages.home.master');
    }
}
