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
                'image' => '/storage/images/1.jpg',
                'audio' => '/storage/audio/1.mp3',
                'collections' => [
                    'Фрукты'
                ],
            ],
            [
                'text' => 'лук',
                'image' => '/storage/images/2.jpg',
                'audio' => '/storage/audio/2.mp3',
                'collections' => [
                    'Овощи'
                ],
            ],
            [
                'text' => 'мандарин',
                'image' => '/storage/images/3.jpg',
                'audio' => '/storage/audio/3.mp3',
                'collections' => [
                    'Фрукты'
                ],
            ],
            [
                'text' => 'чеснок',
                'image' => '/storage/images/4.jpg',
                'audio' => '/storage/audio/4.mp3',
                'collections' => [
                    'Овощи'
                ],
            ],
            [
                'text' => 'огурец',
                'image' => '/storage/images/5.jpg',
                'audio' => '/storage/audio/5.mp3',
                'collections' => [
                    'Овощи'
                ],
            ],
            [
                'text' => 'банан',
                'image' => '/storage/images/6.jpg',
                'audio' => '/storage/audio/6.mp3',
                'collections' => [
                    'Фрукты'
                ],
            ],
            [
                'text' => 'помидор',
                'image' => '/storage/images/7.jpg',
                'audio' => '/storage/audio/7.mp3',
                'collections' => [
                    'Овощи'
                ],
            ],
            [
                'text' => 'дыня',
                'image' => '/storage/images/8.jpg',
                'audio' => '/storage/audio/8.mp3',
                'collections' => [
                    'Фрукты'
                ],
            ],
            [
                'text' => 'груша',
                'image' => '/storage/images/9.jpg',
                'audio' => '/storage/audio/9.mp3',
                'collections' => [
                    'Фрукты'
                ],
            ],
            [
                'text' => 'апельсин',
                'image' => '/storage/images/10.jpg',
                'audio' => '/storage/audio/10.mp3',
                'collections' => [
                    'Фрукты'
                ],
            ],
            [
                'text' => 'кокос',
                'image' => '/storage/images/11.jpg',
                'audio' => '/storage/audio/11.mp3',
                'collections' => [
                    'Фрукты'
                ],
            ],
            [
                'text' => 'ананас',
                'image' => '/storage/images/12.jpg',
                'audio' => '/storage/audio/12.mp3',
                'collections' => [
                    'Фрукты'
                ],
            ],
            [
                'text' => 'слива',
                'image' => '/storage/images/13.jpg',
                'audio' => '/storage/audio/13.mp3',
                'collections' => [
                    'Фрукты'
                ],
            ],
            [
                'text' => 'виноград',
                'image' => '/storage/images/14.jpg',
                'audio' => '/storage/audio/14.mp3',
                'collections' => [
                    'Фрукты'
                ],
            ],
            [
                'text' => 'кастрюля',
                'image' => '/storage/images/15.jpg',
                'audio' => '/storage/audio/15.mp3',
                'collections' => [
                    'Посуда', 'Кухня'
                ],
            ],
            [
                'text' => 'окно',
                'image' => '/storage/images/16.jpg',
                'audio' => '/storage/audio/16.mp3',
                'collections' => [
                    'Дом', 'Комната'
                ],
            ],
            [
                'text' => 'наушники',
                'image' => '/storage/images/17.jpg',
                'audio' => '/storage/audio/17.mp3',
                'collections' => [
                    'Техника', 'Комьютер'
                ],
            ],
            [
                'text' => 'чашка',
                'image' => '/storage/images/18.jpg',
                'audio' => '/storage/audio/18.mp3',
                'collections' => [
                    'Посуда', 'Кухня'
                ],
            ],
            [
                'text' => 'шоколад',
                'image' => '/storage/images/19.jpg',
                'audio' => '/storage/audio/19.mp3',
                'collections' => [
                    'Сладости', 'Еда'
                ],
            ],
            [
                'text' => 'стол',
                'image' => '/storage/images/20.jpg',
                'audio' => '/storage/audio/20.mp3',
                'collections' => [
                    'Кухня', 'Комната', 'Мебель'
                ],
            ],
            [
                'text' => 'телефон',
                'image' => '/storage/images/21.jpg',
                'audio' => '/storage/audio/21.mp3',
                'collections' => [
                    'Техника'
                ],
            ],
            [
                'text' => 'молоко',
                'image' => '/storage/images/22.jpg',
                'audio' => '/storage/audio/22.mp3',
                'collections' => [
                    'Продукты', 'Еда'
                ],
            ],
            [
                'text' => 'часы',
                'image' => '/storage/images/23.jpg',
                'audio' => '/storage/audio/23.mp3',
                'collections' => [
                    'Комната', 'Дом'
                ],
            ],
            [
                'text' => 'стул',
                'image' => '/storage/images/24.jpg',
                'audio' => '/storage/audio/24.mp3',
                'collections' => [
                    'Комната', 'Кухня', 'Мебель'
                ],
            ],
            [
                'text' => 'рюкзак',
                'image' => '/storage/images/25.jpg',
                'audio' => '/storage/audio/25.mp3',
                'collections' => [
                    'Аксессуары', 'Одежда'
                ],
            ],
            [
                'text' => 'ноутбук',
                'image' => '/storage/images/26.jpg',
                'audio' => '/storage/audio/26.mp3',
                'collections' => [
                    'Техника', 'Комьютер'
                ],
            ],
            [
                'text' => 'чайник',
                'image' => '/storage/images/27.jpg',
                'audio' => '/storage/audio/27.mp3',
                'collections' => [
                    'Техника', 'Кухня'
                ],
            ],
            [
                'text' => 'морковь',
                'image' => '/storage/images/28.jpg',
                'audio' => '/storage/audio/28.mp3',
                'collections' => [
                    'Овощи'
                ],
            ],
            [
                'text' => 'стакан',
                'image' => '/storage/images/29.jpg',
                'audio' => '/storage/audio/29.mp3',
                'collections' => [
                    'Кухня', 'Посуда'
                ],
            ],
            [
                'text' => 'мороженое',
                'image' => '/storage/images/30.jpg',
                'audio' => '/storage/audio/30.mp3',
                'collections' => [
                    'Еда', 'Сладости'
                ],
            ],
            [
                'text' => 'эскимо',
                'image' => '/storage/images/31.jpg',
                'audio' => '/storage/audio/31.mp3',
                'collections' => [
                    'Еда', 'Сладости'
                ],
            ],
            [
                'text' => 'кровать',
                'image' => '/storage/images/32.jpg',
                'audio' => '/storage/audio/32.mp3',
                'collections' => [
                    'Мебель', 'Комната'
                ],
            ],
            [
                'text' => 'вилка',
                'image' => '/storage/images/33.jpg',
                'audio' => '/storage/audio/33.mp3',
                'collections' => [
                    'Кухня', 'Посуда'
                ],
            ],
            [
                'text' => 'ложка',
                'image' => '/storage/images/34.jpg',
                'audio' => '/storage/audio/34.mp3',
                'collections' => [
                    'Кухня', 'Посуда'
                ],
            ],
            [
                'text' => 'пианино',
                'image' => '/storage/images/35.jpg',
                'audio' => '/storage/audio/35.mp3',
                'collections' => [
                    'Музыка'
                ],
            ],
            [
                'text' => 'книга',
                'image' => '/storage/images/36.jpg',
                'audio' => '/storage/audio/36.mp3',
                'collections' => [
                    'Аксессуары'
                ],
            ],
            [
                'text' => 'капуста',
                'image' => '/storage/images/37.jpg',
                'audio' => '/storage/audio/37.mp3',
                'collections' => [
                    'Овощи'
                ],
            ],
            [
                'text' => 'сковорода',
                'image' => '/storage/images/38.jpg',
                'audio' => '/storage/audio/38.mp3',
                'collections' => [
                    'Кухня', 'Посуда'
                ],
            ],
            [
                'text' => 'шкаф',
                'image' => '/storage/images/39.jpg',
                'audio' => '/storage/audio/39.mp3',
                'collections' => [
                    'Комната', 'Мебель'
                ],
            ],
            [
                'text' => 'колбаса',
                'image' => '/storage/images/40.jpg',
                'audio' => '/storage/audio/40.mp3',
                'collections' => [
                    'Еда'
                ],
            ],
            [
                'text' => 'слон',
                'image' => '/storage/images/41.jpg',
                'audio' => '/storage/audio/41.mp3',
                'collections' => [
                    'Животные'
                ],
            ],
            [
                'text' => 'кепка',
                'image' => '/storage/images/42.jpg',
                'audio' => '/storage/audio/42.mp3',
                'collections' => [
                    'Одежда'
                ],
            ],
            [
                'text' => 'кресло',
                'image' => '/storage/images/43.jpg',
                'audio' => '/storage/audio/43.mp3',
                'collections' => [
                    'Мебель'
                ],
            ],
            [
                'text' => 'мотоцикл',
                'image' => '/storage/images/44.jpg',
                'audio' => '/storage/audio/44.mp3',
                'collections' => [
                    'Транспорт'
                ],
            ],
            [
                'text' => 'скейтборд',
                'image' => '/storage/images/45.jpg',
                'audio' => '/storage/audio/45.mp3',
                'collections' => [
                    'Спорт'
                ],
            ],
            [
                'text' => 'печенье',
                'image' => '/storage/images/46.jpg',
                'audio' => '/storage/audio/46.mp3',
                'collections' => [
                    'Еда', 'Сладкое'
                ],
            ],
            [
                'text' => 'самокат',
                'image' => '/storage/images/47.jpg',
                'audio' => '/storage/audio/47.mp3',
                'collections' => [
                    'Транспорт', 'Спорт'
                ],
            ],
            [
                'text' => 'черника',
                'image' => '/storage/images/48.jpg',
                'audio' => '/storage/audio/1.mp3',
                'collections' => [
                    'Ягоды'
                ],
            ],
            [
                'text' => 'автобус',
                'image' => '/storage/images/49.jpg',
                'audio' => '/storage/audio/49.mp3',
                'collections' => [
                    'Транспорт', 'Город'
                ],
            ],
            [
                'text' => 'собака',
                'image' => '/storage/images/50.jpg',
                'audio' => '/storage/audio/50.mp3',
                'collections' => [
                    'Животные', 'Домашние животные', 'Дерерня'
                ],
            ],
            [
                'text' => 'баран',
                'image' => '/storage/images/51.jpg',
                'audio' => '/storage/audio/51.mp3',
                'collections' => [
                    'Животные',
                ],
            ],
            [
                'text' => 'облако',
                'image' => '/storage/images/52.jpg',
                'audio' => '/storage/audio/52.mp3',
                'collections' => [
                    'Природа',
                ],
            ],
            [
                'text' => 'троллейбус',
                'image' => '/storage/images/53.jpg',
                'audio' => '/storage/audio/53.mp3',
                'collections' => [
                    'Город', 'Транспорт'
                ],
            ],
            [
                'text' => 'конфета',
                'image' => '/storage/images/54.jpg',
                'audio' => '/storage/audio/54.mp3',
                'collections' => [
                    'Еда', 'Сладкое'
                ],
            ],
            [
                'text' => 'овца',
                'image' => '/storage/images/55.jpg',
                'audio' => '/storage/audio/55.mp3',
                'collections' => [
                    'Животные', 'Деревня'
                ],
            ],
            [
                'text' => 'заяц',
                'image' => '/storage/images/56.jpg',
                'audio' => '/storage/audio/56.mp3',
                'collections' => [
                    'Животные',
                ],
            ],
            [
                'text' => 'куртка',
                'image' => '/storage/images/57.jpg',
                'audio' => '/storage/audio/57.mp3',
                'collections' => [
                    'Одежда',
                ],
            ],
            [
                'text' => 'санки',
                'image' => '/storage/images/58.jpg',
                'audio' => '/storage/audio/58.mp3',
                'collections' => [
                    'Спорт',
                ],
            ],
            [
                'text' => 'велосипед',
                'image' => '/storage/images/59.jpg',
                'audio' => '/storage/audio/59.mp3',
                'collections' => [
                    'Спорт', 'Транспорт'
                ],
            ],
            [
                'text' => 'колонки',
                'image' => '/storage/images/61.jpg',
                'audio' => '/storage/audio/60.mp3',
                'collections' => [
                    'Комната', 'Техника'
                ],
            ],
            [
                'text' => 'сок',
                'image' => '/storage/images/62.jpg',
                'audio' => '/storage/audio/62.mp3',
                'collections' => [
                    'Еда', 'Напитки'
                ],
            ],
            [
                'text' => 'шапка',
                'image' => '/storage/images/63.jpg',
                'audio' => '/storage/audio/63.mp3',
                'collections' => [
                    'Одежда', 'Головные уборы', 'Зима'
                ],
            ],
            [
                'text' => 'клюква',
                'image' => '/storage/images/64.jpg',
                'audio' => '/storage/audio/64.mp3',
                'collections' => [
                    'Ягоды'
                ],
            ],
            [
                'text' => 'брусника',
                'image' => '/storage/images/65.jpg',
                'audio' => '/storage/audio/65.mp3',
                'collections' => [
                    'Ягоды'
                ],
            ],
            [
                'text' => 'куст',
                'image' => '/storage/images/66.jpg',
                'audio' => '/storage/audio/66.mp3',
                'collections' => [
                    'Город', 'Растения'
                ],
            ],
            [
                'text' => 'штаны',
                'image' => '/storage/images/67.jpg',
                'audio' => '/storage/audio/67.mp3',
                'collections' => [
                    'Одежда',
                ],
            ],
            [
                'text' => 'циплёнок',
                'image' => '/storage/images/68.jpg',
                'audio' => '/storage/audio/68.mp3',
                'collections' => [
                    'Животные', 'Деревня'
                ],
            ],
            [
                'text' => 'ролики',
                'image' => '/storage/images/69.jpg',
                'audio' => '/storage/audio/69.mp3',
                'collections' => [
                    'Спорт',
                ],
            ],
            [
                'text' => 'солнце',
                'image' => '/storage/images/70.jpg',
                'audio' => '/storage/audio/70.mp3',
                'collections' => [
                    'Природа',
                ],
            ],
            [
                'text' => 'лошадь',
                'image' => '/storage/images/71.jpg',
                'audio' => '/storage/audio/71.mp3',
                'collections' => [
                    'Животные', 'Деревня'
                ],
            ],
            [
                'text' => 'футболка',
                'image' => '/storage/images/72.jpg',
                'audio' => '/storage/audio/72.mp3',
                'collections' => [
                    'Одежда',
                ],
            ],
            [
                'text' => 'кошка',
                'image' => '/storage/images/73.jpg',
                'audio' => '/storage/audio/73.mp3',
                'collections' => [
                    'Животные', 'Домашние животные', 'Деревня'
                ],
            ],
            [
                'text' => 'курица',
                'image' => '/storage/images/74.jpg',
                'audio' => '/storage/audio/74.mp3',
                'collections' => [
                    'Животные', 'Деревня'
                ],
            ],
            [
                'text' => 'коктейль',
                'image' => '/storage/images/75.jpg',
                'audio' => '/storage/audio/75.mp3',
                'collections' => [
                    'Сладкое', 'Напитки', 'Кафе'
                ],
            ],
            [
                'text' => 'сноуборд',
                'image' => '/storage/images/76.jpg',
                'audio' => '/storage/audio/76.mp3',
                'collections' => [
                    'Спорт', 'Зима'
                ],
            ],
            [
                'text' => 'тигр',
                'image' => '/storage/images/77.jpg',
                'audio' => '/storage/audio/77.mp3',
                'collections' => [
                    'Животные',
                ],
            ],
            [
                'text' => 'корова',
                'image' => '/storage/images/78.jpg',
                'audio' => '/storage/audio/78.mp3',
                'collections' => [
                    'Животные',
                ],
            ],
            [
                'text' => 'луна',
                'image' => '/storage/images/79.jpg',
                'audio' => '/storage/audio/79.mp3',
                'collections' => [
                    'Природа',
                ],
            ],
            [
                'text' => 'коньки',
                'image' => '/storage/images/81.jpg',
                'audio' => '/storage/audio/81.mp3',
                'collections' => [
                    'Спорт', 'Зима'
                ],
            ],
            [
                'text' => 'носки',
                'image' => '/storage/images/82.jpg',
                'audio' => '/storage/audio/82.mp3',
                'collections' => [
                    'Одежда',
                ],
            ],
            [
                'text' => 'поезд',
                'image' => '/storage/images/83.jpg',
                'audio' => '/storage/audio/83.mp3',
                'collections' => [
                    'Транспорт', 'Город'
                ],
            ],
            [
                'text' => 'дверь',
                'image' => '/storage/images/84.jpg',
                'audio' => '/storage/audio/84.mp3',
                'collections' => [
                    'Комната',
                ],
            ],
            [
                'text' => 'козёл',
                'image' => '/storage/images/85.jpg',
                'audio' => '/storage/audio/85.mp3',
                'collections' => [
                    'Животные', 'Деревня'
                ],
            ],
            [
                'text' => 'жираф',
                'image' => '/storage/images/86.jpg',
                'audio' => '/storage/audio/86.mp3',
                'collections' => [
                    'Животные',
                ],
            ],
            [
                'text' => 'телевизор',
                'image' => '/storage/images/87.jpg',
                'audio' => '/storage/audio/87.mp3',
                'collections' => [
                    'Техника',
                ],
            ],
            [
                'text' => 'слива',
                'image' => '/storage/images/88.jpg',
                'audio' => '/storage/audio/88.mp3',
                'collections' => [
                    'Фрукты',
                ],
            ],
            [
                'text' => 'клубника',
                'image' => '/storage/images/89.jpg',
                'audio' => '/storage/audio/89.mp3',
                'collections' => [
                    'Ягоды',
                ],
            ],
            [
                'text' => 'морошка',
                'image' => '/storage/images/90.jpg',
                'audio' => '/storage/audio/90.mp3',
                'collections' => [
                    'Ягоды',
                ],
            ],
            [
                'text' => 'трактор',
                'image' => '/storage/images/91.jpg',
                'audio' => '/storage/audio/91.mp3',
                'collections' => [
                    'Транспорт', 'Деревня'
                ],
            ],
            [
                'text' => 'дерево',
                'image' => '/storage/images/92.jpg',
                'audio' => '/storage/audio/92.mp3',
                'collections' => [
                    'Растения', 'Город'
                ],
            ],
            [
                'text' => 'голубь',
                'image' => '/storage/images/93.jpg',
                'audio' => '/storage/audio/93.mp3',
                'collections' => [
                    'Птицы', 'Город'
                ],
            ],
            [
                'text' => 'лев',
                'image' => '/storage/images/94.jpg',
                'audio' => '/storage/audio/94.mp3',
                'collections' => [
                    'Животные',
                ],
            ],
            [
                'text' => 'лыжи',
                'image' => '/storage/images/96.jpg',
                'audio' => '/storage/audio/96.mp3',
                'collections' => [
                    'Спорт',
                ],
            ],
            [
                'text' => 'тыква',
                'image' => '/storage/images/97.jpg',
                'audio' => '/storage/audio/97.mp3',
                'collections' => [
                    'Овощи',
                ],
            ],
            [
                'text' => 'очки',
                'image' => '/storage/images/99.jpg',
                'audio' => '/storage/audio/99.mp3',
                'collections' => [
                    'Аксессуары',
                ],
            ],
            [
                'text' => 'ботинки',
                'image' => '/storage/images/100.jpg',
                'audio' => '/storage/audio/100.mp3',
                'collections' => [
                    'Одежда', 'Обувь'
                ],
            ],
            [
                'text' => 'сапоги',
                'image' => '/storage/images/101.jpg',
                'audio' => '/storage/audio/101.mp3',
                'collections' => [
                    'Одежда', 'Обувь'
                ],
            ],
            [
                'text' => 'енот',
                'image' => '/storage/images/102.jpg',
                'audio' => '/storage/audio/102.mp3',
                'collections' => [
                    'Животные', 'Дикие животные'
                ],
            ],
            [
                'text' => 'крокодил',
                'image' => '/storage/images/103.jpg',
                'audio' => '/storage/audio/103.mp3',
                'collections' => [
                    'Животные', 'Дикие животные'
                ],
            ],
            [
                'text' => 'жираф',
                'image' => '/storage/images/104.jpg',
                'audio' => '/storage/audio/104.mp3',
                'collections' => [
                    'Животные', 'Дикие животные'
                ],
            ],
            [
                'text' => 'фотоаппарат',
                'image' => '/storage/images/105.jpg',
                'audio' => '/storage/audio/105.mp3',
                'collections' => [
                    'Техника',
                ],
            ],
            [
                'text' => 'клавиатура',
                'image' => '/storage/images/106.jpg',
                'audio' => '/storage/audio/106.mp3',
                'collections' => [
                    'Техника',
                ],
            ],
            [
                'text' => 'кабан',
                'image' => '/storage/images/107.jpg',
                'audio' => '/storage/audio/107.mp3',
                'collections' => [
                    'Животные', 'Дикие животные'
                ],
            ],
            [
                'text' => 'богомол',
                'image' => '/storage/images/108.jpg',
                'audio' => '/storage/audio/108.mp3',
                'collections' => [
                    'Насекомые',
                ],
            ],
            [
                'text' => 'ворона',
                'image' => '/storage/images/109.jpg',
                'audio' => '/storage/audio/109.mp3',
                'collections' => [
                    'Город', 'Птицы'
                ],
            ],
            [
                'text' => 'лягушка',
                'image' => '/storage/images/110.jpg',
                'audio' => '/storage/audio/110.mp3',
                'collections' => [
                    'Лес', 'Животные'
                ],
            ],
            [
                'text' => 'бокал',
                'image' => '/storage/images/111.jpg',
                'audio' => '/storage/audio/111.mp3',
                'collections' => [
                    'Посуда', 'Праздник'
                ],
            ],
            [
                'text' => 'салат',
                'image' => '/storage/images/112.jpg',
                'audio' => '/storage/audio/112.mp3',
                'collections' => [
                    'Еда', 'Праздник'
                ],
            ],
            [
                'text' => 'орёл',
                'image' => '/storage/images/113.jpg',
                'audio' => '/storage/audio/113.mp3',
                'collections' => [
                    'Птицы',
                ],
            ],
            [
                'text' => 'сова',
                'image' => '/storage/images/114.jpg',
                'audio' => '/storage/audio/114.mp3',
                'collections' => [
                    'Птицы', 'Лес'
                ],
            ],
            [
                'text' => 'одеяло',
                'image' => '/storage/images/115.jpg',
                'audio' => '/storage/audio/115.mp3',
                'collections' => [
                    'Комната', 'Постель'
                ],
            ],
            [
                'text' => 'пеликан',
                'image' => '/storage/images/116.jpg',
                'audio' => '/storage/audio/116.mp3',
                'collections' => [
                    'Птицы',
                ],
            ],
            [
                'text' => 'муравей',
                'image' => '/storage/images/117.jpg',
                'audio' => '/storage/audio/117.mp3',
                'collections' => [
                    'Насекомые', 'Лес'
                ],
            ],
            [
                'text' => 'тарелка',
                'image' => '/storage/images/118.jpg',
                'audio' => '/storage/audio/118.mp3',
                'collections' => [
                    'Посуда',
                ],
            ],
            [
                'text' => 'бабочка',
                'image' => '/storage/images/119.jpg',
                'audio' => '/storage/audio/119.mp3',
                'collections' => [
                    'Насекомые',
                ],
            ],
            [
                'text' => 'стрекоза',
                'image' => '/storage/images/121.jpg',
                'audio' => '/storage/audio/121.mp3',
                'collections' => [
                    'Насекомые',
                ],
            ],
            [
                'text' => 'обезьяна',
                'image' => '/storage/images/122.jpg',
                'audio' => '/storage/audio/122.mp3',
                'collections' => [
                    'Животные', 'Дикие животные'
                ],
            ],
            [
                'text' => 'картофель фри',
                'image' => '/storage/images/123.jpg',
                'audio' => '/storage/audio/123.mp3',
                'collections' => [
                    'Еда', 'Город', 'Фастфуд'
                ],
            ],
            [
                'text' => 'гамбургер',
                'image' => '/storage/images/124.jpg',
                'audio' => '/storage/audio/124.mp3',
                'collections' => [
                    'Еда', 'Город', 'Фастфуд'
                ],
            ],
            [
                'text' => 'змея',
                'image' => '/storage/images/125.jpg',
                'audio' => '/storage/audio/125.mp3',
                'collections' => [
                    'Пресмыкающиеся', 'Лес'
                ],
            ],
            [
                'text' => 'трусы',
                'image' => '/storage/images/126.jpg',
                'audio' => '/storage/audio/126.mp3',
                'collections' => [
                    'Одежда',
                ],
            ],
            [
                'text' => 'ящерица',
                'image' => '/storage/images/127.jpg',
                'audio' => '/storage/audio/127.mp3',
                'collections' => [
                    'Пресмыкающиеся',
                ],
            ],
            [
                'text' => 'пюре',
                'image' => '/storage/images/128.jpg',
                'audio' => '/storage/audio/128.mp3',
                'collections' => [
                    'Еда',
                ],
            ],
            [
                'text' => 'бусы',
                'image' => '/storage/images/129.jpg',
                'audio' => '/storage/audio/129.mp3',
                'collections' => [
                    'Аксессуары',
                ],
            ],
            [
                'text' => 'чайка',
                'image' => '/storage/images/130.jpg',
                'audio' => '/storage/audio/130.mp3',
                'collections' => [
                    'Птицы', 'Город'
                ],
            ],
            [
                'text' => 'фламинго',
                'image' => '/storage/images/131.jpg',
                'audio' => '/storage/audio/131.mp3',
                'collections' => [
                    'Птицы',
                ],
            ],
            [
                'text' => 'свинья',
                'image' => '/storage/images/132.jpg',
                'audio' => '/storage/audio/132.mp3',
                'collections' => [
                    'Животные', 'Домашние животные'
                ],
            ],
            [
                'text' => 'паук',
                'image' => '/storage/images/133.jpg',
                'audio' => '/storage/audio/133.mp3',
                'collections' => [
                    'Насекомые', 'Лес'
                ],
            ],
            [
                'text' => 'чай',
                'image' => '/storage/images/134.jpg',
                'audio' => '/storage/audio/134.mp3',
                'collections' => [
                    'Напитки',
                ],
            ],
            [
                'text' => 'воробей',
                'image' => '/storage/images/135.jpg',
                'audio' => '/storage/audio/135.mp3',
                'collections' => [
                    'Птицы', 'Город'
                ],
            ],
            [
                'text' => '',
                'image' => '/storage/images/135.jpg',
                'audio' => '/storage/audio/136.mp3',
                'collections' => [
                    'Птицы', 'Город'
                ],
            ],
            [
                'text' => 'божья коровка',
                'image' => '/storage/images/137.jpg',
                'audio' => '/storage/audio/137.mp3',
                'collections' => [
                    'Насекомые', 'Лес'
                ],
            ],
            [
                'text' => 'кузнечик',
                'image' => '/storage/images/138.jpg',
                'audio' => '/storage/audio/138.mp3',
                'collections' => [
                    'Насекомые',
                ],
            ],
            [
                'text' => 'мухы',
                'image' => '/storage/images/139.jpg',
                'audio' => '/storage/audio/139.mp3',
                'collections' => [
                    'Насекомые',
                ],
            ],
            [
                'text' => 'нагетсы',
                'image' => '/storage/images/140.jpg',
                'audio' => '/storage/audio/140.mp3',
                'collections' => [
                    'Еда', "Фастфуд"
                ],
            ],
            [
                'text' => 'пингвин',
                'image' => '/storage/images/141.jpg',
                'audio' => '/storage/audio/141.mp3',
                'collections' => [
                    'Птицы', "Северный полюс"
                ],
            ],
            [
                'text' => 'акула',
                'image' => '/storage/images/142.jpg',
                'audio' => '/storage/audio/142.mp3',
                'collections' => [
                    'Рыбы', "Океан"
                ],
            ],
            [
                'text' => 'дельфин',
                'image' => '/storage/images/143.jpg',
                'audio' => '/storage/audio/143.mp3',
                'collections' => [
                    'Рыбы', "Океан"
                ],
            ],
            [
                'text' => 'кит',
                'image' => '/storage/images/144.jpg',
                'audio' => '/storage/audio/144.mp3',
                'collections' => [
                    'Рыбы', "Океан"
                ],
            ],
            [
                'text' => 'медведь',
                'image' => '/storage/images/145.jpg',
                'audio' => '/storage/audio/145.mp3',
                'collections' => [
                    'Животные', "Дикие животные", 'Лес'
                ],
            ],
            [
                'text' => 'рысь',
                'image' => '/storage/images/146.jpg',
                'audio' => '/storage/audio/146.mp3',
                'collections' => [
                    'Животные', "Дикие животные", 'Лес'
                ],
            ],
            [
                'text' => 'лось',
                'image' => '/storage/images/147.jpg',
                'audio' => '/storage/audio/147.mp3',
                'collections' => [
                    'Животные', "Дикие животные", 'Лес'
                ],
            ],
            [
                'text' => 'лиса',
                'image' => '/storage/images/148.jpg',
                'audio' => '/storage/audio/148.mp3',
                'collections' => [
                    'Животные', "Дикие животные", 'Лес'
                ],
            ],
            [
                'text' => 'рак',
                'image' => '/storage/images/149.jpg',
                'audio' => '/storage/audio/149.mp3',
                'collections' => [
                    'Река', "Океан"
                ],
            ],
            [
                'text' => 'осьминог',
                'image' => '/storage/images/150.jpg',
                'audio' => '/storage/audio/150.mp3',
                'collections' => [
                    "Океан",
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
            $wordCreated->audio = $wordData['audio'];
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
