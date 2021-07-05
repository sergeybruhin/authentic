<?php

namespace Database\Seeders;

use App\Models\Phrase;
use App\Models\Tag;
use Faker\Factory;
use Illuminate\Database\Seeder;

class PhrasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        Phrase::factory()->count(5)->afterCreating(function($phrase) use ($faker) {
            $tag = Tag::find($faker->numberBetween(1,20));
            $phrase->tags()->save($tag);
        })->create();
    }
}
