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
        $previousWord = null;
        $nextWord = null;

        if($word) {
            // get previous user id
            $previousId = Word::where('id', '<', $word->id)->max('id');
            $previousWord = Word::find($previousId);

            // get next user id
            $nextId = Word::where('id', '>', $word->id)->min('id');
            $nextWord = Word::find($nextId);
        }


//        dd($previousWord->toArray(), $nextWord->toArray());

        return view('pages.word.master')
            ->with(compact('word'))
            ->with(compact('nextWord'))
            ->with(compact('previousWord'));
    }
}
