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
        $faker = Factory::create();
        Word::factory()->count(5)->afterCreating(function($word) use ($faker) {
            $tag = Tag::find($faker->numberBetween(1,20));
            $word->tags()->save($tag);
        })->create();
    }
}
