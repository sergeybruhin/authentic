<?php

namespace App\Http\Controllers;

use App\Models\Phrase;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PhraseController extends Controller
{

    /**
     * @return View
     */
    public function index(): View
    {
        $phrases = Phrase::all();
        return view('pages.phrases.master')
            ->with(compact('phrases'));
    }

    /**
     * @param $id
     * @return View
     */
    public function show($id): View
    {
        $phrase = Phrase::findOrFail($id);
        return view('pages.phrase.master')
            ->with(compact('phrase'));
    }
}
