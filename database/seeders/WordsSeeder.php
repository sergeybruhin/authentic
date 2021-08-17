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
            [
                'text' => 'колбаса',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/40.jpg',
                'collections' => [
                    'Еда'
                ],
            ],
            [
                'text' => 'слон',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/41.jpg',
                'collections' => [
                    'Животные'
                ],
            ],
            [
                'text' => 'кепка',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/42.jpg',
                'collections' => [
                    'Одежда'
                ],
            ],
            [
                'text' => 'кресло',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/43.jpg',
                'collections' => [
                    'Мебель'
                ],
            ],
            [
                'text' => 'мотоцикл',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/44.jpg',
                'collections' => [
                    'Транспорт'
                ],
            ],
            [
                'text' => 'скейтборд',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/45.jpg',
                'collections' => [
                    'Спорт'
                ],
            ],
            [
                'text' => 'печенье',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/46.jpg',
                'collections' => [
                    'Еда', 'Сладкое'
                ],
            ],
            [
                'text' => 'самокат',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/47.jpg',
                'collections' => [
                    'Транспорт', 'Спорт'
                ],
            ],
            [
                'text' => 'черника',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/48.jpg',
                'collections' => [
                    'Ягоды'
                ],
            ],
            [
                'text' => 'автобус',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/49.jpg',
                'collections' => [
                    'Транспорт', 'Город'
                ],
            ],
            [
                'text' => 'собака',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/50.jpg',
                'collections' => [
                    'Животные', 'Домашние животные', 'Дерерня'
                ],
            ],
            [
                'text' => 'баран',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/51.jpg',
                'collections' => [
                    'Животные',
                ],
            ],
            [
                'text' => 'облако',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/52.jpg',
                'collections' => [
                    'Природа',
                ],
            ],
            [
                'text' => 'троллейбус',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/53.jpg',
                'collections' => [
                    'Город', 'Транспорт'
                ],
            ],
            [
                'text' => 'конфета',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/54.jpg',
                'collections' => [
                    'Еда', 'Сладкое'
                ],
            ],
            [
                'text' => 'овца',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/55.jpg',
                'collections' => [
                    'Животные', 'Деревня'
                ],
            ],
            [
                'text' => 'заяц',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/56.jpg',
                'collections' => [
                    'Животные',
                ],
            ],
            [
                'text' => 'куртка',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/57.jpg',
                'collections' => [
                    'Одежда',
                ],
            ],
            [
                'text' => 'санки',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/58.jpg',
                'collections' => [
                    'Спорт',
                ],
            ],
            [
                'text' => 'велосипед',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/59.jpg',
                'collections' => [
                    'Спорт', 'Транспорт'
                ],
            ],
            [
                'text' => 'колонки',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/61.jpg',
                'collections' => [
                    'Комната', 'Техника'
                ],
            ],
            [
                'text' => 'сок',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/62.jpg',
                'collections' => [
                    'Еда', 'Напитки'
                ],
            ],
            [
                'text' => 'шапка',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/63.jpg',
                'collections' => [
                    'Одежда', 'Головные уборы', 'Зима'
                ],
            ],
            [
                'text' => 'клюква',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/64.jpg',
                'collections' => [
                    'Ягоды'
                ],
            ],
            [
                'text' => 'брусника',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/65.jpg',
                'collections' => [
                    'Ягоды'
                ],
            ],
            [
                'text' => 'куст',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/66.jpg',
                'collections' => [
                    'Город', 'Растения'
                ],
            ],
            [
                'text' => 'штаны',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/67.jpg',
                'collections' => [
                    'Одежда',
                ],
            ],
            [
                'text' => 'циплёнок',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/68.jpg',
                'collections' => [
                    'Животные', 'Деревня'
                ],
            ],
            [
                'text' => 'ролики',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/69.jpg',
                'collections' => [
                    'Спорт',
                ],
            ],
            [
                'text' => 'солнце',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/70.jpg',
                'collections' => [
                    'Природа',
                ],
            ],
            [
                'text' => 'лошадь',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/71.jpg',
                'collections' => [
                    'Животные', 'Деревня'
                ],
            ],
            [
                'text' => 'футболка',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/72.jpg',
                'collections' => [
                    'Одежда',
                ],
            ],
            [
                'text' => 'кошка',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/73.jpg',
                'collections' => [
                    'Животные', 'Домашние животные', 'Деревня'
                ],
            ],
            [
                'text' => 'курица',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/74.jpg',
                'collections' => [
                    'Животные', 'Деревня'
                ],
            ],
            [
                'text' => 'коктейль',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/75.jpg',
                'collections' => [
                    'Сладкое', 'Напитки', 'Кафе'
                ],
            ],
            [
                'text' => 'сноуборд',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/76.jpg',
                'collections' => [
                    'Спорт', 'Зима'
                ],
            ],
            [
                'text' => 'тигр',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/77.jpg',
                'collections' => [
                    'Животные',
                ],
            ],
            [
                'text' => 'корова',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/78.jpg',
                'collections' => [
                    'Животные',
                ],
            ],
            [
                'text' => 'луна',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/79.jpg',
                'collections' => [
                    'Природа',
                ],
            ],
            [
                'text' => 'коньки',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/81.jpg',
                'collections' => [
                    'Спорт', 'Зима'
                ],
            ],
            [
                'text' => 'носки',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/82.jpg',
                'collections' => [
                    'Одежда',
                ],
            ],
            [
                'text' => 'поезд',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/83.jpg',
                'collections' => [
                    'Транспорт', 'Город'
                ],
            ],
            [
                'text' => 'дверь',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/84.jpg',
                'collections' => [
                    'Комната',
                ],
            ],
            [
                'text' => 'козёл',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/85.jpg',
                'collections' => [
                    'Животные', 'Деревня'
                ],
            ],
            [
                'text' => 'жираф',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/86.jpg',
                'collections' => [
                    'Животные',
                ],
            ],
            [
                'text' => 'телевизор',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/87.jpg',
                'collections' => [
                    'Техника',
                ],
            ],
            [
                'text' => 'слива',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/88.jpg',
                'collections' => [
                    'Фрукты',
                ],
            ],
            [
                'text' => 'клубника',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/89.jpg',
                'collections' => [
                    'Ягоды',
                ],
            ],
            [
                'text' => 'морошка',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/90.jpg',
                'collections' => [
                    'Ягоды',
                ],
            ],
            [
                'text' => 'трактор',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/91.jpg',
                'collections' => [
                    'Транспорт', 'Деревня'
                ],
            ],
            [
                'text' => 'дерево',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/92.jpg',
                'collections' => [
                    'Растения', 'Город'
                ],
            ],
            [
                'text' => 'голубь',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/93.jpg',
                'collections' => [
                    'Птицы', 'Город'
                ],
            ],
            [
                'text' => 'лев',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/94.jpg',
                'collections' => [
                    'Животные',
                ],
            ],
            [
                'text' => 'лыжи',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/96.jpg',
                'collections' => [
                    'Спорт',
                ],
            ],
            [
                'text' => 'тыква',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/97.jpg',
                'collections' => [
                    'Овощи',
                ],
            ],
            [
                'text' => 'очки',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/99.jpg',
                'collections' => [
                    'Аксессуары',
                ],
            ],
            [
                'text' => 'ботинки',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/100.jpg',
                'collections' => [
                    'Одежда', 'Обувь'
                ],
            ],
            [
                'text' => 'сапоги',
                'image' => 'http://authentic.sergeybruhin.com/storage/images/101.jpg',
                'collections' => [
                    'Одежда', 'Обувь'
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
