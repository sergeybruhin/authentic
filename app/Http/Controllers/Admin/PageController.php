<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * @return View
     */
    public function home(): View
    {
        return view('admin.pages.home.master');
    }
}
