<?php

namespace App\Nova\Actions;

use App\Models\PhraseCollection;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Collection;
use Laravel\Nova\Actions\Action;
use Laravel\Nova\Fields\ActionFields;

class ShuffleCollectionOrderAction extends Action
{
    use InteractsWithQueue, Queueable;

    public $name = 'Перемешать порядок фраз';

    /**
     * Perform the action on the given models.
     *
     * @param ActionFields $fields
     * @param Collection $models
     * @return mixed
     */
    public function handle(ActionFields $fields, Collection $models): mixed
    {
        foreach ($models as $model) {
            $this->shufflePhraseCollectionOrder($model);
        }
        return Action::message('Отправлено в очередь');
    }

    /**
     * Get the fields available on the action.
     *
     * @return array
     */
    public function fields()
    {
        return [];
    }

    private function shufflePhraseCollectionOrder(PhraseCollection $phraseCollection)
    {
        $orderValue = 1;
        foreach ($phraseCollection->phrases->shuffle() as $phrase) {
            $phraseCollection->phrases()->updateExistingPivot($phrase->id, ['order' => $orderValue]);
            $orderValue++;
        }
    }
}
