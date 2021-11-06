<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Profile;

class ProfileMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): mixed
    {
        if (!Auth::check()) {
            return $next($request);
        }
        if ($request->session()->has('profile_id')) {

            $profile = Profile::where('user_id', Auth::user()->id)
                ->findOrFail($request->session()->get('profile_id'));

            $request->route()->setParameter('profile', $profile);
        }

        return $next($request);
    }
}
