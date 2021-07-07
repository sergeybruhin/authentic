<?php

namespace App\Http\Controllers;

use App\Models\Word;
use Illuminate\View\View;

class WordController extends Controller
{

    /**
     * @return View
     */
    public function index(): View
    {
        $words = Word::all();
        return view('pages.words.master')
            ->with(compact('words'));
    }

    /**
     * @param $id
     * @return View
     */
    public function show($id): View
    {
        $word = Word::findOrFail($id);
        return view('pages.word.master')
            ->with(compact('word'));
    }
}
