<?php

namespace App\Http\Controllers;

use App\Models\Word;

class WordController extends Controller
{
    public function show($id) {
        $word = Word::findOrFail($id);
        return view('pages.word.master')
            ->with(compact('word'));
    }
}
