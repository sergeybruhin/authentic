<?php

namespace Database\Seeders;

use App\Models\Phrase;
use App\Models\PhraseCollection;
use App\Models\Tag;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PhrasesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $phrases = [
            [
                'text' => 'красное яблоко',
                'image' => '/storage/images/1.jpg',
                'collections' => [
                    'Фрукты', 'Цвета'
                ],
            ],

            [
                'text' => 'чёрная сковорода',
                'image' => '/storage/images/38.jpg',
                'collections' => [
                    'Посуда', 'Цвета'
                ],
            ],
            [
                'text' => 'серый слон',
                'image' => '/storage/images/41.jpg',
                'collections' => [
                    'Животные', 'Цвета'
                ],
            ],
            [
                'text' => 'коричневая лошадь',
                'image' => '/storage/images/71.jpg',
                'collections' => [
                    'Животные', 'Цвета'
                ],
            ],
            [
                'text' => 'розовая свинья',
                'image' => '/storage/images/132.jpg',
                'collections' => [
                    'Животные', 'Цвета'
                ],
            ],
            [
                'text' => 'рыжая лиса',
                'image' => '/storage/images/148.jpg',
                'collections' => [
                    'Животные', 'Цвета'
                ],
            ],
            [
                'text' => 'синий троллейбус',
                'image' => '/storage/images/53.jpg',
                'collections' => [
                    'Транспорт', 'Цвета'
                ],
            ],

            [
                'text' => 'прозрачный бокал',
                'image' => '/storage/images/111.jpg',
                'collections' => [
                    'Посуда', 'Цвета'
                ],
            ],
            [
                'text' => 'чёрный рюкзак',
                'image' => '/storage/images/25.jpg',
                'collections' => [
                    'Одежда', 'Цвета'
                ],
            ],
            [
                'text' => 'красная кепка',
                'image' => '/storage/images/42.jpg',
                'collections' => [
                    'Одежда', 'Цвета'
                ],
            ],
            [
                'text' => 'жёлтая куртка',
                'image' => '/storage/images/57.jpg',
                'collections' => [
                    'Одежда', 'Цвета'
                ],
            ],
            [
                'text' => 'зелёная шапка',
                'image' => '/storage/images/63.jpg',
                'collections' => [
                    'Одежда', 'Цвета'
                ],
            ],
            [
                'text' => 'серые штаны',
                'image' => '/storage/images/67.jpg',
                'collections' => [
                    'Одежда', 'Цвета'
                ],
            ],
            [
                'text' => 'оранжевая футболка',
                'image' => '/storage/images/72.jpg',
                'collections' => [
                    'Одежда', 'Цвета'
                ],
            ],
            [
                'text' => 'жёлтые сапоги',
                'image' => '/storage/images/101.jpg',
                'collections' => [
                    'Одежда', 'Цвета'
                ],
            ],
            [
                'text' => 'зелёный виноград',
                'image' => '/storage/images/14.jpg',
                'collections' => [
                    'Фрукты', 'Цвета'
                ],
            ],
            [
                'text' => 'голубая чашка',
                'image' => '/storage/images/18.jpg',
                'collections' => [
                    'Посуда', 'Цвета'
                ],
            ],
            [
                'text' => 'синяя слива',
                'image' => '/storage/images/13.jpg',
                'collections' => [
                    'Фрукты', 'Цвета'
                ],
            ],
            [
                'text' => 'оранжевый апельсин',
                'image' => '/storage/images/10.jpg',
                'collections' => [
                    'Фрукты', 'Цвета'
                ],
            ],
            [
                'text' => 'коричневый кокос',
                'image' => '/storage/images/11.jpg',
                'collections' => [
                    'Фрукты', 'Цвета'
                ],
            ],
            [
                'text' => 'красная божья коровка',
                'image' => '/storage/images/137.jpg',
                'collections' => [
                    'Насекомые', 'Цвета'
                ],
            ],
            [
                'text' => 'коричневый муравей',
                'image' => '/storage/images/117.jpg',
                'collections' => [
                    'Насекомые', 'Цвета'
                ],
            ],
            [
                'text' => 'серая сова',
                'image' => '/storage/images/114.jpg',
                'collections' => [
                    'Птицы', 'Цвета'
                ],
            ],
            [
                'text' => 'белое полотенце',
                'image' => '/storage/images/115.jpg',
                'collections' => [
                    'Комната', 'Цвета'
                ],
            ],
            [
                'text' => 'чёрные колонки',
                'image' => '/storage/images/61.jpg',
                'collections' => [
                    'Комната', 'Цвета'
                ],
            ],
            [
                'text' => 'белая дверь',
                'image' => '/storage/images/84.jpg',
                'collections' => [
                    'Комната', 'Цвета'
                ],
            ],
            [
                'text' => 'коричневый шоколад',
                'image' => '/storage/images/19.jpg',
                'collections' => [
                    'Еда', 'Цвета'
                ],
            ],
            [
                'text' => 'жёлтое пюре',
                'image' => '/storage/images/128.jpg',
                'collections' => [
                    'Еда', 'Цвета'
                ],
            ],
            [
                'text' => 'прозрачный стакан',
                'image' => '/storage/images/29.jpg',
                'collections' => [
                    'Посуда', 'Цвета'
                ],
            ],
        ];

        $faker = Factory::create();
        $i = 400;
        $tagsCount = Tag::count();

        foreach ($phrases as $index => $phraseData) {

            $phraseCreated = new Phrase();
            $phraseCreated->text = $phraseData['text'];
            $phraseCreated->image = $phraseData['image'];
//            $phraseCreated->audio = $phraseData['audio'];
            $phraseCreated->save();

            $tag = Tag::find($faker->numberBetween(1, $tagsCount));
            $phraseCreated->tags()->save($tag);

//            $collection = Collection::inRandomOrder()->first();
//            $phraseCreated->collections()->save($collection);

//            $phraseCollectionIds = PhraseCollection::inRandomOrder()->take(3)->pluck('id');

//            $phraseCreated->phraseCollections()->attach($phraseCollectionIds, ['order' => ($index + 1)]);

            if (array_key_exists('collections', $phraseData)) {
                foreach ($phraseData['collections'] as $collectionData) {
                    $selectedCollection = PhraseCollection::firstOrCreate([
                            'name' => $collectionData,
                            'slug' => Str::slug($collectionData)
                        ]
                    );
                    $phraseCreated->phraseCollections()->attach($selectedCollection->id, ['order' => ($index + 1)]);
                }
            }


            $i++;
        }

    }
}
