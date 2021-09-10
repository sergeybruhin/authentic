<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * @return View
     */
    public function home(): View
    {
        $user = User::find(Auth::user()->id);
        return view('admin.pages.home.master')
            ->with(compact('user'));
    }

    /**
     * @return View
     */
    public function settings(): View
    {
        $user = User::find(Auth::user()->id);
        return view('admin.pages.settings.master')
            ->with(compact('user'));
    }

}
