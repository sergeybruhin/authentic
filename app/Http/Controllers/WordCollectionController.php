<?php

namespace App\Http\Controllers;

use App\Models\WordCollection;
use Illuminate\View\View;

class WordCollectionController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $wordCollections = WordCollection::all();
        return view('pages.word-collections.master')
            ->with(compact('wordCollections'));
    }

    /**
     * @param $id
     * @return View
     */
    public function show($id): View
    {
        $wordCollection = WordCollection::findOrFail($id);

        return view('pages.word-collection.master')
            ->with(compact('wordCollection'));
    }
}
