<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PhraseCollection;
use Illuminate\View\View;

class PhraseCollectionController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $phraseCollections = PhraseCollection::with('phrases', 'phrases.media')
            ->withCount('phrases')
            ->orderByDesc('phrases_count')
            ->paginate(30);
        return view('frontend.pages.phrase-collections.master')
            ->with(compact('phraseCollections'));
    }

    /**
     * @param $id
     * @return View
     */
    public function show($id): View
    {
        $phraseCollection = PhraseCollection::with('phrases', 'phrases.media')
            ->findOrFail($id);

        return view('frontend.pages.phrase-collection.master')
            ->with(compact('phraseCollection'));
    }

    public function showPhrase($collectionId, $phraseId): View
    {
        $phraseCollection = PhraseCollection::findOrFail($collectionId);
        $phrase = $phraseCollection->phrases()->find($phraseId);

        $previousPhrase = null;
        $nextPhrase = null;

        if ($phrase) {

            $previousPhrase = $phraseCollection->phrases()
                ->where('phrases.id', '!=', $phrase->id)
                ->wherePivot('order', '<', $phrase->pivot->order)
                ->first();

            $nextPhrase = $phraseCollection->phrases()
                ->where('phrases.id', '!=', $phrase->id)
                ->wherePivot('order', '>=', $phrase->pivot->order)
                ->first();
        }


        return view('frontend.pages.phrase.master')
            ->with(compact('phraseCollection'))
            ->with(compact('phrase'))
            ->with(compact('nextPhrase'))
            ->with(compact('previousPhrase'));


    }

}
