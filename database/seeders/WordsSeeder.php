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
            [
              'text'=> 'яблоко',
              'image' => 'http://authentic.sergeybruhin.com/storage/images/1.jpg',
            ],
            [
              'text'=> 'лук',
              'image' => 'http://authentic.sergeybruhin.com/storage/images/2.jpg',
            ],
            [
              'text'=> 'мандарин',
              'image' => 'http://authentic.sergeybruhin.com/storage/images/3.jpg',
            ],
            [
              'text'=> 'чеснок',
              'image' => 'http://authentic.sergeybruhin.com/storage/images/4.jpg',
            ],
            [
              'text'=> 'огурец',
              'image' => 'http://authentic.sergeybruhin.com/storage/images/5.jpg',
            ],
            [
              'text'=> 'банан',
              'image' => 'http://authentic.sergeybruhin.com/storage/images/6.jpg',
            ],
            [
              'text'=> 'помидор',
              'image' => 'http://authentic.sergeybruhin.com/storage/images/7.jpg',
            ],
            [
              'text'=> 'дыня',
              'image' => 'http://authentic.sergeybruhin.com/storage/images/8.jpg',
            ],
            [
              'text'=> 'груша',
              'image' => 'http://authentic.sergeybruhin.com/storage/images/9.jpg',
            ],
            [
              'text'=> 'апельсин',
              'image' => 'http://authentic.sergeybruhin.com/storage/images/10.jpg',
            ],
            [
              'text'=> 'кокос',
              'image' => 'http://authentic.sergeybruhin.com/storage/images/11.jpg',
            ],
            [
              'text'=> 'ананас',
              'image' => 'http://authentic.sergeybruhin.com/storage/images/12.jpg',
            ],
            [
              'text'=> 'слива',
              'image' => 'http://authentic.sergeybruhin.com/storage/images/13.jpg',
            ],
            [
              'text'=> 'виноград',
              'image' => 'http://authentic.sergeybruhin.com/storage/images/14.jpg',
            ],
        ];

        $faker = Factory::create();
        $i = 400;
        $tagsCount = Tag::count();

        foreach ($words as $index => $word) {

            $wordCreated = new Word();
            $wordCreated->text = $word['text'];
//            $wordCreated->image = 'https://picsum.photos/id/' . $i . '/640/480';
            $wordCreated->image = $word['image'];
            $wordCreated->save();

            $tag = Tag::find($faker->numberBetween(1, $tagsCount));
            $wordCreated->tags()->save($tag);

//            $collection = Collection::inRandomOrder()->first();
//            $wordCreated->collections()->save($collection);

            $wordCollectionIds = WordCollection::inRandomOrder()->take(3)->pluck('id');
            $wordCreated->wordCollections()->attach($wordCollectionIds);


            $i++;
        }

    }
}
