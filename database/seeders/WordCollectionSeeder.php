<?php

namespace Database\Seeders;

use App\Models\WordCollection;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class WordCollectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $wordCollections = [
            'Кухня',
            'Гостиная',
            'Люди',
            'Игры',
            'Овощи',
            'Фрукты'
        ];

        foreach ($wordCollections as $wordCollection) {
            WordCollection::factory()->afterMaking(function ($wordCollectionCreated) use ($wordCollection) {
                $wordCollectionCreated->name = $wordCollection;
                $wordCollectionCreated->slug = Str::slug($wordCollection);
            })->create();
        }

    }
}
