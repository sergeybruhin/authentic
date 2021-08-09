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
                'text' => 'яблоко',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/1.jpg',
            ],
            [
                'text' => 'лук',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/2.jpg',
            ],
            [
                'text' => 'мандарин',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/3.jpg',
            ],
            [
                'text' => 'чеснок',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/4.jpg',
            ],
            [
                'text' => 'огурец',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/5.jpg',
            ],
            [
                'text' => 'банан',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/6.jpg',
            ],
            [
                'text' => 'помидор',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/7.jpg',
            ],
            [
                'text' => 'дыня',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/8.jpg',
            ],
            [
                'text' => 'груша',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/9.jpg',
            ],
            [
                'text' => 'апельсин',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/10.jpg',
            ],
            [
                'text' => 'кокос',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/11.jpg',
            ],
            [
                'text' => 'ананас',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/12.jpg',
            ],
            [
                'text' => 'слива',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/13.jpg',
            ],
            [
                'text' => 'виноград',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/14.jpg',
            ],
            [
                'text' => 'кастрюля',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/15.jpg',
            ],
            [
                'text' => 'окно',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/16.jpg',
            ],
            [
                'text' => 'наушники',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/17.jpg',
            ],
            [
                'text' => 'чашка',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/18.jpg',
            ],
            [
                'text' => 'шоколад',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/19.jpg',
            ],
            [
                'text' => 'стол',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/20.jpg',
            ],
            [
                'text' => 'телефон',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/21.jpg',
            ],
            [
                'text' => 'молоко',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/22.jpg',
            ],
            [
                'text' => 'часы',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/23.jpg',
            ],
            [
                'text' => 'стул',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/24.jpg',
            ],
            [
                'text' => 'рюкзак',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/25.jpg',
            ],
            [
                'text' => 'ноутбук',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/26.jpg',
            ],
            [
                'text' => 'чайник',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/27.jpg',
            ],
            [
                'text' => 'морковь',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/28.jpg',
            ],
            [
                'text' => 'стакан',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/29.jpg',
            ],
            [
                'text' => 'мороженое',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/30.jpg',
            ],
            [
                'text' => 'эскимо',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/31.jpg',
            ],
            [
                'text' => 'кровать',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/32.jpg',
            ],
            [
                'text' => 'вилка',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/33.jpg',
            ],
            [
                'text' => 'ложка',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/34.jpg',
            ],
            [
                'text' => 'пианино',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/35.jpg',
            ],
            [
                'text' => 'книга',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/36.jpg',
            ],
            [
                'text' => 'капуста',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/37.jpg',
            ],
            [
                'text' => 'сковорода',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/38.jpg',
            ],
            [
                'text' => 'шкаф',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/39.jpg',
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
            $wordCreated->wordCollections()->attach($wordCollectionIds, ['order' => ($index + 1)]);


            $i++;
        }

    }
}
