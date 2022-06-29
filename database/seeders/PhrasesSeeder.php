<?php

namespace Database\Seeders;

use App\Models\Phrase;
use App\Models\PhraseCollection;
use App\Models\Tag;
use Faker\Factory;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Throwable;
use Exception;

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
                'image' => '1.jpg',
                'collections' => [
                    'Фрукты', 'Цвета'
                ],
            ],

            [
                'text' => 'чёрная сковорода',
                'image' => '38.jpg',
                'collections' => [
                    'Посуда', 'Цвета'
                ],
            ],
            [
                'text' => 'серый слон',
                'image' => '41.jpg',
                'collections' => [
                    'Животные', 'Цвета'
                ],
            ],
            [
                'text' => 'коричневая лошадь',
                'image' => '71.jpg',
                'collections' => [
                    'Животные', 'Цвета'
                ],
            ],
            [
                'text' => 'розовая свинья',
                'image' => '132.jpg',
                'collections' => [
                    'Животные', 'Цвета'
                ],
            ],
            [
                'text' => 'рыжая лиса',
                'image' => '148.jpg',
                'collections' => [
                    'Животные', 'Цвета'
                ],
            ],
            [
                'text' => 'синий троллейбус',
                'image' => '53.jpg',
                'collections' => [
                    'Транспорт', 'Цвета'
                ],
            ],

            [
                'text' => 'прозрачный бокал',
                'image' => '111.jpg',
                'collections' => [
                    'Посуда', 'Цвета'
                ],
            ],
            [
                'text' => 'чёрный рюкзак',
                'image' => '25.jpg',
                'collections' => [
                    'Одежда', 'Цвета'
                ],
            ],
            [
                'text' => 'красная кепка',
                'image' => '42.jpg',
                'collections' => [
                    'Одежда', 'Цвета'
                ],
            ],
            [
                'text' => 'жёлтая куртка',
                'image' => '57.jpg',
                'collections' => [
                    'Одежда', 'Цвета'
                ],
            ],
            [
                'text' => 'зелёная шапка',
                'image' => '63.jpg',
                'collections' => [
                    'Одежда', 'Цвета'
                ],
            ],
            [
                'text' => 'серые штаны',
                'image' => '67.jpg',
                'collections' => [
                    'Одежда', 'Цвета'
                ],
            ],
            [
                'text' => 'оранжевая футболка',
                'image' => '72.jpg',
                'collections' => [
                    'Одежда', 'Цвета'
                ],
            ],
            [
                'text' => 'жёлтые сапоги',
                'image' => '101.jpg',
                'collections' => [
                    'Одежда', 'Цвета'
                ],
            ],
            [
                'text' => 'зелёный виноград',
                'image' => '14.jpg',
                'collections' => [
                    'Фрукты', 'Цвета'
                ],
            ],
            [
                'text' => 'голубая чашка',
                'image' => '18.jpg',
                'collections' => [
                    'Посуда', 'Цвета'
                ],
            ],
            [
                'text' => 'синяя слива',
                'image' => '13.jpg',
                'collections' => [
                    'Фрукты', 'Цвета'
                ],
            ],
            [
                'text' => 'оранжевый апельсин',
                'image' => '10.jpg',
                'collections' => [
                    'Фрукты', 'Цвета'
                ],
            ],
            [
                'text' => 'коричневый кокос',
                'image' => '11.jpg',
                'collections' => [
                    'Фрукты', 'Цвета'
                ],
            ],
            [
                'text' => 'красная божья коровка',
                'image' => '137.jpg',
                'collections' => [
                    'Насекомые', 'Цвета'
                ],
            ],
            [
                'text' => 'коричневый муравей',
                'image' => '117.jpg',
                'collections' => [
                    'Насекомые', 'Цвета'
                ],
            ],
            [
                'text' => 'серая сова',
                'image' => '114.jpg',
                'collections' => [
                    'Птицы', 'Цвета'
                ],
            ],
            [
                'text' => 'белое полотенце',
                'image' => '115.jpg',
                'collections' => [
                    'Комната', 'Цвета'
                ],
            ],
            [
                'text' => 'чёрные колонки',
                'image' => '61.jpg',
                'collections' => [
                    'Комната', 'Цвета'
                ],
            ],
            [
                'text' => 'белая дверь',
                'image' => '84.jpg',
                'collections' => [
                    'Комната', 'Цвета'
                ],
            ],
            [
                'text' => 'коричневый шоколад',
                'image' => '19.jpg',
                'collections' => [
                    'Еда', 'Цвета'
                ],
            ],
            [
                'text' => 'жёлтое пюре',
                'image' => '128.jpg',
                'collections' => [
                    'Еда', 'Цвета'
                ],
            ],
            [
                'text' => 'прозрачный стакан',
                'image' => '29.jpg',
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

            $srcPath = Storage::disk('seeder')->path('images/' . $phraseData['image']);

            if (File::exists($srcPath)) {
                $phraseCreated->addMediaFromDisk('/images/' . $phraseData['image'], 'seeder')
                    ->preservingOriginal()
                    ->toMediaCollection('image');
            }

//            $phraseCreated->audio = $phraseData['audio'];
            $phraseCreated->save();

            $tag = Tag::find($faker->numberBetween(1, $tagsCount));
            $phraseCreated->tags()->save($tag);

            if (array_key_exists('collections', $phraseData)) {
                foreach ($phraseData['collections'] as $collectionData) {
                    $selectedCollection = PhraseCollection::firstOrCreate([
                            'name' => $collectionData,
                            'slug' => Str::slug($collectionData)
                        ]
                    );
                    $phraseCreated->phraseCollections()
                        ->attach(
                            $selectedCollection->id,
                            ['order' => ($index + 1)]
                        );
                }
            }


            $i++;
        }

    }


    /**
     * @throws FileNotFoundException
     * @throws Throwable
     */
    private function storeImage(string $relativePath): string
    {
        $filePath = Storage::disk('seeder')->path('images/' . $relativePath);


        throw_if(!File::exists($filePath),
            new Exception('Файл ' . $relativePath . ' не найден'));

        $fileExt = File::extension($filePath);
        $fileName = File::name($filePath);
        $file = File::get($filePath);
        $newName = md5($fileName . microtime()) . '.' . $fileExt;
        Storage::disk('images')->copy($newName, $file);

        return $newName;
    }
}
