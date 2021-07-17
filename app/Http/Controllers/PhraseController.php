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
        $phrases = Phrase::paginate(12);
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
        $previousPhrase = null;
        $nextPhrase = null;

        if ($phrase) {
            // get previous user id
            $previousId = Phrase::where('id', '<', $phrase->id)->max('id');
            $previousPhrase = Phrase::find($previousId);

            // get next user id
            $nextId = Phrase::where('id', '>', $phrase->id)->min('id');
            $nextPhrase = Phrase::find($nextId);
        }

        return view('pages.phrase.master')
            ->with(compact('phrase'))
            ->with(compact('previousPhrase'))
            ->with(compact('nextPhrase'));
    }
}
