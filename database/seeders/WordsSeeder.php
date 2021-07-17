<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Word;
use App\Models\WordCollection;
use Faker\Factory;
use Illuminate\Database\Seeder;

class WordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $words = [
            'яблоко',
            'груша',
            'киви',
            'апельсин',
            'лимон',
            'ананас',
            'банан',
            'персик',
            'виноград',
            'арбуз',
            'малина',
            'клубника'
        ];

        $faker = Factory::create();
        $i = 400;
        foreach ($words as $word) {

            $wordCreated = new Word();
            $wordCreated->text = $word;
            $wordCreated->image = 'https://picsum.photos/id/' . $i . '/640/480';
            $wordCreated->save();

            $tag = Tag::find($faker->numberBetween(1, 20));
            $wordCreated->tags()->save($tag);

//            $collection = Collection::inRandomOrder()->first();
//            $wordCreated->collections()->save($collection);

            $wordCollectionIds = WordCollection::inRandomOrder()->take(3)->pluck('id');
            $wordCreated->wordCollections()->attach($wordCollectionIds);


            $i++;
        }

    }
}
