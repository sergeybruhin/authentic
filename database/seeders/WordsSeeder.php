<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Word;
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

        foreach ($words as $word) {
            $wordCreated = new Word();
            $wordCreated->text = $word;
            $wordCreated->image = 'https://picsum.photos/id/1060/640/480';
            $wordCreated->save();

            $tag = Tag::find($faker->numberBetween(1,20));
            $wordCreated->tags()->save($tag);
        }

    }
}
