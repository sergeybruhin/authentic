<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Collection;
use App\Models\Phrase;
use App\Models\PhraseCollection;
use Illuminate\Database\Eloquent\Builder;
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
            // get previous user id
            $previousId = $phraseCollection->phrases()->wherePivot('order', '<', $phrase->pivot->order)->max('order');
//            $previousPhrase = $collection->phrases()->find($previousId);
//            $previousId = $collection->phrases()->first();
//            dd($previousId);
            $previousPhrase = $phraseCollection->phrases()->find($previousId);
//            $previousPhrase = Phrase::whereHas('phraseCollections', function (Builder $query) use ($collectionId) {
//                return $query->where('id', $collectionId);
//            })->first();
//            $previousPhrase = Phrase::where('phrase-collections.id', $collectionId );
//            $previousPhrase = Phrase::whereHas('phraseCollections', function($query) use ($collectionId) {
//               $query->where('id', $collectionId);
//            });

//            dd($previousPhrase->first());

            // get next user id
            $nextId = $phraseCollection->phrases()->wherePivot('order', '>', $phrase->pivot->order)->min('order');
            $nextPhrase = $phraseCollection->phrases()->find($nextId);
        }

        //        dd($previousPhrase->toArray(), $nextPhrase->toArray());

        return view('frontend.pages.phrase.master')
            ->with(compact('phraseCollection'))
            ->with(compact('phrase'))
            ->with(compact('nextPhrase'))
            ->with(compact('previousPhrase'));


    }

}
