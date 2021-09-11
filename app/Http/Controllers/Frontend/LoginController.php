<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class LoginController extends Controller
{

    /**
     * @return View
     */
    public function login(): View
    {
        return view('frontend.pages.login.master');
    }

    /**
     * Handle an authentication attempt.
     *
     * @param Request $request
     * @return RedirectResponse
     */
    public function authenticate(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/admin');
        }


        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }
}
