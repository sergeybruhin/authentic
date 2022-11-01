<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Phrase;
use Illuminate\View\View;

class PhraseController extends Controller
{

    /**
     * @return View
     */
    public function index(): View
    {
        $phrases = Phrase::paginate(12);
        return view('frontend.pages.phrases.master')
            ->with(compact('phrases'));
    }

    /**
     * @param $id
     * @return View
     */
    public function show($id): View
    {

        $phrase = Phrase::findOrFail($id);
        $previousPhrase = null;
        $nextPhrase = null;

        if ($phrase) {
            // get previous phrase id
            $previousId = Phrase::where('id', '<', $phrase->id)->max('id');
            $previousPhrase = Phrase::find($previousId);

            // get next phrase id
            $nextId = Phrase::where('id', '>', $phrase->id)->min('id');
            $nextPhrase = Phrase::find($nextId);

        }


        return view('frontend.pages.phrase.master')
            ->with(compact('phrase'))
            ->with(compact('nextPhrase'))
            ->with(compact('previousPhrase'));
    }
}
