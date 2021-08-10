<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class WordController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        return view('admin.resources.word.index');
    }
}
