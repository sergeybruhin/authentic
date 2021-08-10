<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\View\View;

class TagController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $tags = Tag::all();
        return view('frontend.pages.tags.master')
            ->with(compact('tags'));
    }

    /**
     * @param $id
     * @return View
     */
    public function show($id): View
    {
        $tag = Tag::findOrFail($id);
        return view('frontend.pages.tag.master')
            ->with(compact('tag'));
    }
}
