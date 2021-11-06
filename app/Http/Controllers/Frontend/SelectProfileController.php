<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Profile;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SelectProfileController extends Controller
{
    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function __invoke(Request $request): RedirectResponse
    {
        $request->validate([
            'profile_id' => 'required|integer|exists:profiles,id'
        ]);

        $profile = Profile::findOrFail($request->input('profile_id'));
        $request->session()->put('profile_id', $profile->id);
        return redirect()->back();
    }
}
