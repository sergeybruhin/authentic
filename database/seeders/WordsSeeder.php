<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Word;
use App\Models\WordCollection;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

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
                'collections' => [
                    'Фрукты'
                ],
            ],
            [
                'text' => 'лук',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/2.jpg',
                'collections' => [
                    'Овощи'
                ],
            ],
            [
                'text' => 'мандарин',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/3.jpg',
                'collections' => [
                    'Фрукты'
                ],
            ],
            [
                'text' => 'чеснок',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/4.jpg',
                'collections' => [
                    'Овощи'
                ],
            ],
            [
                'text' => 'огурец',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/5.jpg',
                'collections' => [
                    'Овощи'
                ],
            ],
            [
                'text' => 'банан',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/6.jpg',
                'collections' => [
                    'Фрукты'
                ],
            ],
            [
                'text' => 'помидор',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/7.jpg',
                'collections' => [
                    'Овощи'
                ],
            ],
            [
                'text' => 'дыня',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/8.jpg',
                'collections' => [
                    'Фрукты'
                ],
            ],
            [
                'text' => 'груша',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/9.jpg',
                'collections' => [
                    'Фрукты'
                ],
            ],
            [
                'text' => 'апельсин',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/10.jpg',
                'collections' => [
                    'Фрукты'
                ],
            ],
            [
                'text' => 'кокос',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/11.jpg',
                'collections' => [
                    'Фрукты'
                ],
            ],
            [
                'text' => 'ананас',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/12.jpg',
                'collections' => [
                    'Фрукты'
                ],
            ],
            [
                'text' => 'слива',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/13.jpg',
                'collections' => [
                    'Фрукты'
                ],
            ],
            [
                'text' => 'виноград',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/14.jpg',
                'collections' => [
                    'Фрукты'
                ],
            ],
            [
                'text' => 'кастрюля',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/15.jpg',
                'collections' => [
                    'Посуда', 'Кухня'
                ],
            ],
            [
                'text' => 'окно',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/16.jpg',
                'collections' => [
                    'Дом', 'Комната'
                ],
            ],
            [
                'text' => 'наушники',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/17.jpg',
                'collections' => [
                    'Техника', 'Комьютер'
                ],
            ],
            [
                'text' => 'чашка',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/18.jpg',
                'collections' => [
                    'Посуда', 'Кухня'
                ],
            ],
            [
                'text' => 'шоколад',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/19.jpg',
                'collections' => [
                    'Сладости', 'Еда'
                ],
            ],
            [
                'text' => 'стол',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/20.jpg',
                'collections' => [
                    'Кухня', 'Комната', 'Мебель'
                ],
            ],
            [
                'text' => 'телефон',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/21.jpg',
                'collections' => [
                    'Техника'
                ],
            ],
            [
                'text' => 'молоко',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/22.jpg',
                'collections' => [
                    'Продукты', 'Еда'
                ],
            ],
            [
                'text' => 'часы',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/23.jpg',
                'collections' => [
                    'Комната', 'Дом'
                ],
            ],
            [
                'text' => 'стул',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/24.jpg',
                'collections' => [
                    'Комната', 'Кухня', 'Мебель'
                ],
            ],
            [
                'text' => 'рюкзак',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/25.jpg',
                'collections' => [
                    'Аксессуары', 'Одежда'
                ],
            ],
            [
                'text' => 'ноутбук',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/26.jpg',
                'collections' => [
                    'Техника', 'Комьютер'
                ],
            ],
            [
                'text' => 'чайник',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/27.jpg',
                'collections' => [
                    'Техника', 'Кухня'
                ],
            ],
            [
                'text' => 'морковь',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/28.jpg',
                'collections' => [
                    'Овощи'
                ],
            ],
            [
                'text' => 'стакан',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/29.jpg',
                'collections' => [
                    'Кухня', 'Посуда'
                ],
            ],
            [
                'text' => 'мороженое',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/30.jpg',
                'collections' => [
                    'Еда', 'Сладости'
                ],
            ],
            [
                'text' => 'эскимо',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/31.jpg',
                'collections' => [
                    'Еда', 'Сладости'
                ],
            ],
            [
                'text' => 'кровать',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/32.jpg',
                'collections' => [
                    'Мебель', 'Комната'
                ],
            ],
            [
                'text' => 'вилка',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/33.jpg',
                'collections' => [
                    'Кухня', 'Посуда'
                ],
            ],
            [
                'text' => 'ложка',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/34.jpg',
                'collections' => [
                    'Кухня', 'Посуда'
                ],
            ],
            [
                'text' => 'пианино',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/35.jpg',
                'collections' => [
                    'Музыка'
                ],
            ],
            [
                'text' => 'книга',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/36.jpg',
                'collections' => [
                    'Аксессуары'
                ],
            ],
            [
                'text' => 'капуста',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/37.jpg',
                'collections' => [
                    'Овощи'
                ],
            ],
            [
                'text' => 'сковорода',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/38.jpg',
                'collections' => [
                    'Кухня', 'Посуда'
                ],
            ],
            [
                'text' => 'шкаф',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/39.jpg',
                'collections' => [
                    'Комната', 'Мебель'
                ],
            ],
        ];

        $faker = Factory::create();
        $i = 400;
        $tagsCount = Tag::count();

        foreach ($words as $index => $wordData) {

            $wordCreated = new Word();
            $wordCreated->text = $wordData['text'];
//            $wordCreated->image = 'https://picsum.photos/id/' . $i . '/640/480';
            $wordCreated->image = $wordData['image'];
            $wordCreated->save();

            $tag = Tag::find($faker->numberBetween(1, $tagsCount));
            $wordCreated->tags()->save($tag);

//            $collection = Collection::inRandomOrder()->first();
//            $wordCreated->collections()->save($collection);

//            $wordCollectionIds = WordCollection::inRandomOrder()->take(3)->pluck('id');

//            $wordCreated->wordCollections()->attach($wordCollectionIds, ['order' => ($index + 1)]);

            if (array_key_exists('collections', $wordData)) {
                foreach ($wordData['collections'] as $collectionData) {
                    $selectedCollection = WordCollection::firstOrCreate([
                            'name' => $collectionData,
                            'slug' => Str::slug($collectionData)
                        ]
                    );
                    $wordCreated->wordCollections()->attach($selectedCollection->id, ['order' => ($index + 1)]);
                }
            }


            $i++;
        }

    }
}
