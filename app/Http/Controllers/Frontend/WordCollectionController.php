<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\WordCollection;
use Illuminate\View\View;

class WordCollectionController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $wordCollections = WordCollection::with('words', 'words.media')
            ->withCount('words')
            ->orderByDesc('words_count')
            ->paginate(30);
        return view('frontend.pages.word-collections.master')
            ->with(compact('wordCollections'));
    }

    /**
     * @param $id
     * @return View
     */
    public function show($id): View
    {
        $wordCollection = WordCollection::with('words', 'words.media')
            ->findOrFail($id);

        return view('frontend.pages.word-collection.master')
            ->with(compact('wordCollection'));
    }

    public function showWord($collectionId, $wordId): View
    {
        $wordCollection = WordCollection::findOrFail($collectionId);
        $word = $wordCollection->words()->find($wordId);

        $previousWord = null;
        $nextWord = null;

        if ($word) {
            $previousId = $wordCollection->words()->wherePivot('order', '<', $word->pivot->order)->max('order');
            $previousWord = $wordCollection->words()->find($previousId);

            $nextId = $wordCollection->words()->wherePivot('order', '>', $word->pivot->order)->min('order');
            $nextWord = $wordCollection->words()->find($nextId);
        }

        return view('frontend.pages.word.master')
            ->with(compact('wordCollection'))
            ->with(compact('word'))
            ->with(compact('nextWord'))
            ->with(compact('previousWord'));


    }

}
