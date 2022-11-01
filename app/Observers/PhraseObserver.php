<?php

namespace App\Observers;

use App\Models\Phrase;
use Str;

class PhraseObserver
{
    public function creating(Phrase $phrase)
    {
        $phrase->text = Str::lower($phrase->text);
    }

    public function updating(Phrase $phrase)
    {
        $phrase->text = Str::lower($phrase->text);
    }
}
