<?php

namespace App\Http\Controllers;

use App\Models\Collection;
use Illuminate\Http\Request;
use Illuminate\View\View;

class CollectionController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $collections = Collection::all();
        return view('pages.collections.master')
            ->with(compact('collections'));
    }

    /**
     * @param $id
     * @return View
     */
    public function show($id) :View
    {
        $collection = Collection::findOrFail($id);
        return view('pages.collection.master')
            ->with(compact('collection'));
    }
}
