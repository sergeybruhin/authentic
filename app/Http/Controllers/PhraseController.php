<?php

namespace App\Http\Controllers;

use App\Models\Phrase;
use Illuminate\Http\Request;

class PhraseController extends Controller
{
    public function show($id) {
        $phrase = Phrase::findOrFail($id);
        return view('pages.phrase.master')
            ->with(compact('phrase'));
    }
}