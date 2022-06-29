<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Word;
use App\Models\WordCollection;
use Exception;
use Faker\Factory;
use Illuminate\Contracts\Filesystem\FileNotFoundException;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Throwable;

class WordsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws FileNotFoundException
     * @throws Throwable
     */
    public function run()
    {

        $words = [
            [
                'text' => 'яблоко',
                'image' => '1.jpg',
                'audio' => 'audio/1.mp3',
                'collections' => [
                    'Фрукты'
                ],
            ],
            [
                'text' => 'лук',
                'image' => '2.jpg',
                'audio' => 'audio/2.mp3',
                'collections' => [
                    'Овощи'
                ],
            ],
            [
                'text' => 'мандарин',
                'image' => '3.jpg',
                'audio' => 'audio/3.mp3',
                'collections' => [
                    'Фрукты'
                ],
            ],
            [
                'text' => 'чеснок',
                'image' => '4.jpg',
                'audio' => 'audio/4.mp3',
                'collections' => [
                    'Овощи'
                ],
            ],
            [
                'text' => 'огурец',
                'image' => '5.jpg',
                'audio' => 'audio/5.mp3',
                'collections' => [
                    'Овощи'
                ],
            ],
            [
                'text' => 'банан',
                'image' => '6.jpg',
                'audio' => 'audio/6.mp3',
                'collections' => [
                    'Фрукты'
                ],
            ],
            [
                'text' => 'помидор',
                'image' => '7.jpg',
                'audio' => 'audio/7.mp3',
                'collections' => [
                    'Овощи'
                ],
            ],
            [
                'text' => 'дыня',
                'image' => '8.jpg',
                'audio' => 'audio/8.mp3',
                'collections' => [
                    'Фрукты'
                ],
            ],
            [
                'text' => 'груша',
                'image' => '9.jpg',
                'audio' => 'audio/9.mp3',
                'collections' => [
                    'Фрукты'
                ],
            ],
            [
                'text' => 'апельсин',
                'image' => '10.jpg',
                'audio' => 'audio/10.mp3',
                'collections' => [
                    'Фрукты'
                ],
            ],
            [
                'text' => 'кокос',
                'image' => '11.jpg',
                'audio' => 'audio/11.mp3',
                'collections' => [
                    'Фрукты'
                ],
            ],
            [
                'text' => 'ананас',
                'image' => '12.jpg',
                'audio' => 'audio/12.mp3',
                'collections' => [
                    'Фрукты'
                ],
            ],
            [
                'text' => 'слива',
                'image' => '13.jpg',
                'audio' => 'audio/13.mp3',
                'collections' => [
                    'Фрукты'
                ],
            ],
            [
                'text' => 'виноград',
                'image' => '14.jpg',
                'audio' => 'audio/14.mp3',
                'collections' => [
                    'Фрукты'
                ],
            ],
            [
                'text' => 'кастрюля',
                'image' => '15.jpg',
                'audio' => 'audio/15.mp3',
                'collections' => [
                    'Посуда', 'Кухня'
                ],
            ],
            [
                'text' => 'окно',
                'image' => '16.jpg',
                'audio' => 'audio/16.mp3',
                'collections' => [
                    'Дом', 'Комната'
                ],
            ],
            [
                'text' => 'наушники',
                'image' => '17.jpg',
                'audio' => 'audio/17.mp3',
                'collections' => [
                    'Техника', 'Комьютер'
                ],
            ],
            [
                'text' => 'чашка',
                'image' => '18.jpg',
                'audio' => 'audio/18.mp3',
                'collections' => [
                    'Посуда', 'Кухня'
                ],
            ],
            [
                'text' => 'шоколад',
                'image' => '19.jpg',
                'audio' => 'audio/19.mp3',
                'collections' => [
                    'Сладости', 'Еда'
                ],
            ],
            [
                'text' => 'стол',
                'image' => '20.jpg',
                'audio' => 'audio/20.mp3',
                'collections' => [
                    'Кухня', 'Комната', 'Мебель'
                ],
            ],
            [
                'text' => 'телефон',
                'image' => '21.jpg',
                'audio' => 'audio/21.mp3',
                'collections' => [
                    'Техника'
                ],
            ],
            [
                'text' => 'молоко',
                'image' => '22.jpg',
                'audio' => 'audio/22.mp3',
                'collections' => [
                    'Продукты', 'Еда'
                ],
            ],
            [
                'text' => 'часы',
                'image' => '23.jpg',
                'audio' => 'audio/23.mp3',
                'collections' => [
                    'Комната', 'Дом'
                ],
            ],
            [
                'text' => 'стул',
                'image' => '24.jpg',
                'audio' => 'audio/24.mp3',
                'collections' => [
                    'Комната', 'Кухня', 'Мебель'
                ],
            ],
            [
                'text' => 'рюкзак',
                'image' => '25.jpg',
                'audio' => 'audio/25.mp3',
                'collections' => [
                    'Аксессуары', 'Одежда'
                ],
            ],
            [
                'text' => 'ноутбук',
                'image' => '26.jpg',
                'audio' => 'audio/26.mp3',
                'collections' => [
                    'Техника', 'Комьютер'
                ],
            ],
            [
                'text' => 'чайник',
                'image' => '27.jpg',
                'audio' => 'audio/27.mp3',
                'collections' => [
                    'Техника', 'Кухня'
                ],
            ],
            [
                'text' => 'морковь',
                'image' => '28.jpg',
                'audio' => 'audio/28.mp3',
                'collections' => [
                    'Овощи'
                ],
            ],
            [
                'text' => 'стакан',
                'image' => '29.jpg',
                'audio' => 'audio/29.mp3',
                'collections' => [
                    'Кухня', 'Посуда'
                ],
            ],
            [
                'text' => 'мороженое',
                'image' => '30.jpg',
                'audio' => 'audio/30.mp3',
                'collections' => [
                    'Еда', 'Сладости'
                ],
            ],
            [
                'text' => 'эскимо',
                'image' => '31.jpg',
                'audio' => 'audio/31.mp3',
                'collections' => [
                    'Еда', 'Сладости'
                ],
            ],
            [
                'text' => 'кровать',
                'image' => '32.jpg',
                'audio' => 'audio/32.mp3',
                'collections' => [
                    'Мебель', 'Комната'
                ],
            ],
            [
                'text' => 'вилка',
                'image' => '33.jpg',
                'audio' => 'audio/33.mp3',
                'collections' => [
                    'Кухня', 'Посуда'
                ],
            ],
            [
                'text' => 'ложка',
                'image' => '34.jpg',
                'audio' => 'audio/34.mp3',
                'collections' => [
                    'Кухня', 'Посуда'
                ],
            ],
            [
                'text' => 'пианино',
                'image' => '35.jpg',
                'audio' => 'audio/35.mp3',
                'collections' => [
                    'Музыка'
                ],
            ],
            [
                'text' => 'книга',
                'image' => '36.jpg',
                'audio' => 'audio/36.mp3',
                'collections' => [
                    'Аксессуары'
                ],
            ],
            [
                'text' => 'капуста',
                'image' => '37.jpg',
                'audio' => 'audio/37.mp3',
                'collections' => [
                    'Овощи'
                ],
            ],
            [
                'text' => 'сковорода',
                'image' => '38.jpg',
                'audio' => 'audio/38.mp3',
                'collections' => [
                    'Кухня', 'Посуда'
                ],
            ],
            [
                'text' => 'шкаф',
                'image' => '39.jpg',
                'audio' => 'audio/39.mp3',
                'collections' => [
                    'Комната', 'Мебель'
                ],
            ],
            [
                'text' => 'колбаса',
                'image' => '40.jpg',
                'audio' => 'audio/40.mp3',
                'collections' => [
                    'Еда'
                ],
            ],
            [
                'text' => 'слон',
                'image' => '41.jpg',
                'audio' => 'audio/41.mp3',
                'collections' => [
                    'Животные'
                ],
            ],
            [
                'text' => 'кепка',
                'image' => '42.jpg',
                'audio' => 'audio/42.mp3',
                'collections' => [
                    'Одежда'
                ],
            ],
            [
                'text' => 'кресло',
                'image' => '43.jpg',
                'audio' => 'audio/43.mp3',
                'collections' => [
                    'Мебель'
                ],
            ],
            [
                'text' => 'мотоцикл',
                'image' => '44.jpg',
                'audio' => 'audio/44.mp3',
                'collections' => [
                    'Транспорт'
                ],
            ],
            [
                'text' => 'скейтборд',
                'image' => '45.jpg',
                'audio' => 'audio/45.mp3',
                'collections' => [
                    'Спорт'
                ],
            ],
            [
                'text' => 'печенье',
                'image' => '46.jpg',
                'audio' => 'audio/46.mp3',
                'collections' => [
                    'Еда', 'Сладкое'
                ],
            ],
            [
                'text' => 'самокат',
                'image' => '47.jpg',
                'audio' => 'audio/47.mp3',
                'collections' => [
                    'Транспорт', 'Спорт'
                ],
            ],
            [
                'text' => 'черника',
                'image' => '48.jpg',
                'audio' => 'audio/1.mp3',
                'collections' => [
                    'Ягоды'
                ],
            ],
            [
                'text' => 'автобус',
                'image' => '49.jpg',
                'audio' => 'audio/49.mp3',
                'collections' => [
                    'Транспорт', 'Город'
                ],
            ],
            [
                'text' => 'собака',
                'image' => '50.jpg',
                'audio' => 'audio/50.mp3',
                'collections' => [
                    'Животные', 'Домашние животные', 'Дерерня'
                ],
            ],
            [
                'text' => 'баран',
                'image' => '51.jpg',
                'audio' => 'audio/51.mp3',
                'collections' => [
                    'Животные',
                ],
            ],
            [
                'text' => 'облако',
                'image' => '52.jpg',
                'audio' => 'audio/52.mp3',
                'collections' => [
                    'Природа',
                ],
            ],
            [
                'text' => 'троллейбус',
                'image' => '53.jpg',
                'audio' => 'audio/53.mp3',
                'collections' => [
                    'Город', 'Транспорт'
                ],
            ],
            [
                'text' => 'конфета',
                'image' => '54.jpg',
                'audio' => 'audio/54.mp3',
                'collections' => [
                    'Еда', 'Сладкое'
                ],
            ],
            [
                'text' => 'овца',
                'image' => '55.jpg',
                'audio' => 'audio/55.mp3',
                'collections' => [
                    'Животные', 'Деревня'
                ],
            ],
            [
                'text' => 'заяц',
                'image' => '56.jpg',
                'audio' => 'audio/56.mp3',
                'collections' => [
                    'Животные',
                ],
            ],
            [
                'text' => 'куртка',
                'image' => '57.jpg',
                'audio' => 'audio/57.mp3',
                'collections' => [
                    'Одежда',
                ],
            ],
            [
                'text' => 'санки',
                'image' => '58.jpg',
                'audio' => 'audio/58.mp3',
                'collections' => [
                    'Спорт',
                ],
            ],
            [
                'text' => 'велосипед',
                'image' => '59.jpg',
                'audio' => 'audio/59.mp3',
                'collections' => [
                    'Спорт', 'Транспорт'
                ],
            ],
            [
                'text' => 'колонки',
                'image' => '61.jpg',
                'audio' => 'audio/60.mp3',
                'collections' => [
                    'Комната', 'Техника'
                ],
            ],
            [
                'text' => 'сок',
                'image' => '62.jpg',
                'audio' => 'audio/62.mp3',
                'collections' => [
                    'Еда', 'Напитки'
                ],
            ],
            [
                'text' => 'шапка',
                'image' => '63.jpg',
                'audio' => 'audio/63.mp3',
                'collections' => [
                    'Одежда', 'Головные уборы', 'Зима'
                ],
            ],
            [
                'text' => 'клюква',
                'image' => '64.jpg',
                'audio' => 'audio/64.mp3',
                'collections' => [
                    'Ягоды'
                ],
            ],
            [
                'text' => 'брусника',
                'image' => '65.jpg',
                'audio' => 'audio/65.mp3',
                'collections' => [
                    'Ягоды'
                ],
            ],
            [
                'text' => 'куст',
                'image' => '66.jpg',
                'audio' => 'audio/66.mp3',
                'collections' => [
                    'Город', 'Растения'
                ],
            ],
            [
                'text' => 'штаны',
                'image' => '67.jpg',
                'audio' => 'audio/67.mp3',
                'collections' => [
                    'Одежда',
                ],
            ],
            [
                'text' => 'циплёнок',
                'image' => '68.jpg',
                'audio' => 'audio/68.mp3',
                'collections' => [
                    'Животные', 'Деревня'
                ],
            ],
            [
                'text' => 'ролики',
                'image' => '69.jpg',
                'audio' => 'audio/69.mp3',
                'collections' => [
                    'Спорт',
                ],
            ],
            [
                'text' => 'солнце',
                'image' => '70.jpg',
                'audio' => 'audio/70.mp3',
                'collections' => [
                    'Природа',
                ],
            ],
            [
                'text' => 'лошадь',
                'image' => '71.jpg',
                'audio' => 'audio/71.mp3',
                'collections' => [
                    'Животные', 'Деревня'
                ],
            ],
            [
                'text' => 'футболка',
                'image' => '72.jpg',
                'audio' => 'audio/72.mp3',
                'collections' => [
                    'Одежда',
                ],
            ],
            [
                'text' => 'кошка',
                'image' => '73.jpg',
                'audio' => 'audio/73.mp3',
                'collections' => [
                    'Животные', 'Домашние животные', 'Деревня'
                ],
            ],
            [
                'text' => 'курица',
                'image' => '74.jpg',
                'audio' => 'audio/74.mp3',
                'collections' => [
                    'Животные', 'Деревня'
                ],
            ],
            [
                'text' => 'коктейль',
                'image' => '75.jpg',
                'audio' => 'audio/75.mp3',
                'collections' => [
                    'Сладкое', 'Напитки', 'Кафе'
                ],
            ],
            [
                'text' => 'сноуборд',
                'image' => '76.jpg',
                'audio' => 'audio/76.mp3',
                'collections' => [
                    'Спорт', 'Зима'
                ],
            ],
            [
                'text' => 'тигр',
                'image' => '77.jpg',
                'audio' => 'audio/77.mp3',
                'collections' => [
                    'Животные',
                ],
            ],
            [
                'text' => 'корова',
                'image' => '78.jpg',
                'audio' => 'audio/78.mp3',
                'collections' => [
                    'Животные',
                ],
            ],
            [
                'text' => 'луна',
                'image' => '79.jpg',
                'audio' => 'audio/79.mp3',
                'collections' => [
                    'Природа',
                ],
            ],
            [
                'text' => 'коньки',
                'image' => '81.jpg',
                'audio' => 'audio/81.mp3',
                'collections' => [
                    'Спорт', 'Зима'
                ],
            ],
            [
                'text' => 'носки',
                'image' => '82.jpg',
                'audio' => 'audio/82.mp3',
                'collections' => [
                    'Одежда',
                ],
            ],
            [
                'text' => 'поезд',
                'image' => '83.jpg',
                'audio' => 'audio/83.mp3',
                'collections' => [
                    'Транспорт', 'Город'
                ],
            ],
            [
                'text' => 'дверь',
                'image' => '84.jpg',
                'audio' => 'audio/84.mp3',
                'collections' => [
                    'Комната',
                ],
            ],
            [
                'text' => 'козёл',
                'image' => '85.jpg',
                'audio' => 'audio/85.mp3',
                'collections' => [
                    'Животные', 'Деревня'
                ],
            ],
            [
                'text' => 'жираф',
                'image' => '86.jpg',
                'audio' => 'audio/86.mp3',
                'collections' => [
                    'Животные',
                ],
            ],
            [
                'text' => 'телевизор',
                'image' => '87.jpg',
                'audio' => 'audio/87.mp3',
                'collections' => [
                    'Техника',
                ],
            ],
            [
                'text' => 'клубника',
                'image' => '89.jpg',
                'audio' => 'audio/89.mp3',
                'collections' => [
                    'Ягоды',
                ],
            ],
            [
                'text' => 'морошка',
                'image' => '90.jpg',
                'audio' => 'audio/90.mp3',
                'collections' => [
                    'Ягоды',
                ],
            ],
            [
                'text' => 'трактор',
                'image' => '91.jpg',
                'audio' => 'audio/91.mp3',
                'collections' => [
                    'Транспорт', 'Деревня'
                ],
            ],
            [
                'text' => 'дерево',
                'image' => '92.jpg',
                'audio' => 'audio/92.mp3',
                'collections' => [
                    'Растения', 'Город'
                ],
            ],
            [
                'text' => 'голубь',
                'image' => '93.jpg',
                'audio' => 'audio/93.mp3',
                'collections' => [
                    'Птицы', 'Город'
                ],
            ],
            [
                'text' => 'лев',
                'image' => '94.jpg',
                'audio' => 'audio/94.mp3',
                'collections' => [
                    'Животные',
                ],
            ],
            [
                'text' => 'лыжи',
                'image' => '96.jpg',
                'audio' => 'audio/96.mp3',
                'collections' => [
                    'Спорт',
                ],
            ],
            [
                'text' => 'тыква',
                'image' => '97.jpg',
                'audio' => 'audio/97.mp3',
                'collections' => [
                    'Овощи',
                ],
            ],
            [
                'text' => 'очки',
                'image' => '99.jpg',
                'audio' => 'audio/99.mp3',
                'collections' => [
                    'Аксессуары',
                ],
            ],
            [
                'text' => 'ботинки',
                'image' => '100.jpg',
                'audio' => 'audio/100.mp3',
                'collections' => [
                    'Одежда', 'Обувь'
                ],
            ],
            [
                'text' => 'сапоги',
                'image' => '101.jpg',
                'audio' => 'audio/101.mp3',
                'collections' => [
                    'Одежда', 'Обувь'
                ],
            ],
            [
                'text' => 'енот',
                'image' => '102.jpg',
                'audio' => 'audio/102.mp3',
                'collections' => [
                    'Животные', 'Дикие животные'
                ],
            ],
            [
                'text' => 'крокодил',
                'image' => '103.jpg',
                'audio' => 'audio/103.mp3',
                'collections' => [
                    'Животные', 'Дикие животные'
                ],
            ],
            [
                'text' => 'жираф',
                'image' => '104.jpg',
                'audio' => 'audio/104.mp3',
                'collections' => [
                    'Животные', 'Дикие животные'
                ],
            ],
            [
                'text' => 'фотоаппарат',
                'image' => '105.jpg',
                'audio' => 'audio/105.mp3',
                'collections' => [
                    'Техника',
                ],
            ],
            [
                'text' => 'клавиатура',
                'image' => '106.jpg',
                'audio' => 'audio/106.mp3',
                'collections' => [
                    'Техника',
                ],
            ],
            [
                'text' => 'кабан',
                'image' => '107.jpg',
                'audio' => 'audio/107.mp3',
                'collections' => [
                    'Животные', 'Дикие животные'
                ],
            ],
            [
                'text' => 'богомол',
                'image' => '108.jpg',
                'audio' => 'audio/108.mp3',
                'collections' => [
                    'Насекомые',
                ],
            ],
            [
                'text' => 'ворона',
                'image' => '109.jpg',
                'audio' => 'audio/109.mp3',
                'collections' => [
                    'Город', 'Птицы'
                ],
            ],
            [
                'text' => 'лягушка',
                'image' => '110.jpg',
                'audio' => 'audio/110.mp3',
                'collections' => [
                    'Лес', 'Животные'
                ],
            ],
            [
                'text' => 'бокал',
                'image' => '111.jpg',
                'audio' => 'audio/111.mp3',
                'collections' => [
                    'Посуда', 'Праздник'
                ],
            ],
            [
                'text' => 'салат',
                'image' => '112.jpg',
                'audio' => 'audio/112.mp3',
                'collections' => [
                    'Еда', 'Праздник'
                ],
            ],
            [
                'text' => 'орёл',
                'image' => '113.jpg',
                'audio' => 'audio/113.mp3',
                'collections' => [
                    'Птицы',
                ],
            ],
            [
                'text' => 'сова',
                'image' => '114.jpg',
                'audio' => 'audio/114.mp3',
                'collections' => [
                    'Птицы', 'Лес'
                ],
            ],
            [
                'text' => 'одеяло',
                'image' => '115.jpg',
                'audio' => 'audio/115.mp3',
                'collections' => [
                    'Комната', 'Постель'
                ],
            ],
            [
                'text' => 'пеликан',
                'image' => '116.jpg',
                'audio' => 'audio/116.mp3',
                'collections' => [
                    'Птицы',
                ],
            ],
            [
                'text' => 'муравей',
                'image' => '117.jpg',
                'audio' => 'audio/117.mp3',
                'collections' => [
                    'Насекомые', 'Лес'
                ],
            ],
            [
                'text' => 'тарелка',
                'image' => '118.jpg',
                'audio' => 'audio/118.mp3',
                'collections' => [
                    'Посуда',
                ],
            ],
            [
                'text' => 'бабочка',
                'image' => '119.jpg',
                'audio' => 'audio/119.mp3',
                'collections' => [
                    'Насекомые',
                ],
            ],
            [
                'text' => 'стрекоза',
                'image' => '121.jpg',
                'audio' => 'audio/121.mp3',
                'collections' => [
                    'Насекомые',
                ],
            ],
            [
                'text' => 'обезьяна',
                'image' => '122.jpg',
                'audio' => 'audio/122.mp3',
                'collections' => [
                    'Животные', 'Дикие животные'
                ],
            ],
            [
                'text' => 'картофель фри',
                'image' => '123.jpg',
                'audio' => 'audio/123.mp3',
                'collections' => [
                    'Еда', 'Город', 'Фастфуд'
                ],
            ],
            [
                'text' => 'гамбургер',
                'image' => '124.jpg',
                'audio' => 'audio/124.mp3',
                'collections' => [
                    'Еда', 'Город', 'Фастфуд'
                ],
            ],
            [
                'text' => 'змея',
                'image' => '125.jpg',
                'audio' => 'audio/125.mp3',
                'collections' => [
                    'Пресмыкающиеся', 'Лес'
                ],
            ],
            [
                'text' => 'трусы',
                'image' => '126.jpg',
                'audio' => 'audio/126.mp3',
                'collections' => [
                    'Одежда',
                ],
            ],
            [
                'text' => 'ящерица',
                'image' => '127.jpg',
                'audio' => 'audio/127.mp3',
                'collections' => [
                    'Пресмыкающиеся',
                ],
            ],
            [
                'text' => 'пюре',
                'image' => '128.jpg',
                'audio' => 'audio/128.mp3',
                'collections' => [
                    'Еда',
                ],
            ],
            [
                'text' => 'бусы',
                'image' => '129.jpg',
                'audio' => 'audio/129.mp3',
                'collections' => [
                    'Аксессуары',
                ],
            ],
            [
                'text' => 'чайка',
                'image' => '130.jpg',
                'audio' => 'audio/130.mp3',
                'collections' => [
                    'Птицы', 'Город'
                ],
            ],
            [
                'text' => 'фламинго',
                'image' => '131.jpg',
                'audio' => 'audio/131.mp3',
                'collections' => [
                    'Птицы',
                ],
            ],
            [
                'text' => 'свинья',
                'image' => '132.jpg',
                'audio' => 'audio/132.mp3',
                'collections' => [
                    'Животные', 'Домашние животные'
                ],
            ],
            [
                'text' => 'паук',
                'image' => '133.jpg',
                'audio' => 'audio/133.mp3',
                'collections' => [
                    'Насекомые', 'Лес'
                ],
            ],
            [
                'text' => 'чай',
                'image' => '134.jpg',
                'audio' => 'audio/134.mp3',
                'collections' => [
                    'Напитки',
                ],
            ],
            [
                'text' => 'воробей',
                'image' => '135.jpg',
                'audio' => 'audio/135.mp3',
                'collections' => [
                    'Птицы', 'Город'
                ],
            ],
            [
                'text' => '',
                'image' => '135.jpg',
                'audio' => 'audio/136.mp3',
                'collections' => [
                    'Птицы', 'Город'
                ],
            ],
            [
                'text' => 'божья коровка',
                'image' => '137.jpg',
                'audio' => 'audio/137.mp3',
                'collections' => [
                    'Насекомые', 'Лес'
                ],
            ],
            [
                'text' => 'кузнечик',
                'image' => '138.jpg',
                'audio' => 'audio/138.mp3',
                'collections' => [
                    'Насекомые',
                ],
            ],
            [
                'text' => 'мухы',
                'image' => '139.jpg',
                'audio' => 'audio/139.mp3',
                'collections' => [
                    'Насекомые',
                ],
            ],
            [
                'text' => 'нагетсы',
                'image' => '140.jpg',
                'audio' => 'audio/140.mp3',
                'collections' => [
                    'Еда', "Фастфуд"
                ],
            ],
            [
                'text' => 'пингвин',
                'image' => '141.jpg',
                'audio' => 'audio/141.mp3',
                'collections' => [
                    'Птицы', "Северный полюс"
                ],
            ],
            [
                'text' => 'акула',
                'image' => '142.jpg',
                'audio' => 'audio/142.mp3',
                'collections' => [
                    'Рыбы', "Океан"
                ],
            ],
            [
                'text' => 'дельфин',
                'image' => '143.jpg',
                'audio' => 'audio/143.mp3',
                'collections' => [
                    'Рыбы', "Океан"
                ],
            ],
            [
                'text' => 'кит',
                'image' => '144.jpg',
                'audio' => 'audio/144.mp3',
                'collections' => [
                    'Рыбы', "Океан"
                ],
            ],
            [
                'text' => 'медведь',
                'image' => '145.jpg',
                'audio' => 'audio/145.mp3',
                'collections' => [
                    'Животные', "Дикие животные", 'Лес'
                ],
            ],
            [
                'text' => 'рысь',
                'image' => '146.jpg',
                'audio' => 'audio/146.mp3',
                'collections' => [
                    'Животные', "Дикие животные", 'Лес'
                ],
            ],
            [
                'text' => 'лось',
                'image' => '147.jpg',
                'audio' => 'audio/147.mp3',
                'collections' => [
                    'Животные', "Дикие животные", 'Лес'
                ],
            ],
            [
                'text' => 'лиса',
                'image' => '148.jpg',
                'audio' => 'audio/148.mp3',
                'collections' => [
                    'Животные', "Дикие животные", 'Лес'
                ],
            ],
            [
                'text' => 'рак',
                'image' => '149.jpg',
                'audio' => 'audio/149.mp3',
                'collections' => [
                    'Река', "Океан"
                ],
            ],
            [
                'text' => 'осьминог',
                'image' => '150.jpg',
                'audio' => 'audio/150.mp3',
                'collections' => [
                    "Океан",
                ],
            ],
            [
                'text' => 'красный',
                'image' => '151.jpg',
                'audio' => 'audio/151.mp3',
                'collections' => [
                    "Цвета",
                ],
            ],
            [
                'text' => 'оранжевый',
                'image' => '152.jpg',
                'audio' => 'audio/152.mp3',
                'collections' => [
                    "Цвета",
                ],
            ],
            [
                'text' => 'жёлтый',
                'image' => '153.jpg',
                'audio' => 'audio/153.mp3',
                'collections' => [
                    "Цвета",
                ],
            ],
            [
                'text' => 'зелёный',
                'image' => '154.jpg',
                'audio' => 'audio/154.mp3',
                'collections' => [
                    "Цвета",
                ],
            ],
            [
                'text' => 'голубой',
                'image' => '155.jpg',
                'audio' => 'audio/155.mp3',
                'collections' => [
                    "Цвета",
                ],
            ],
            [
                'text' => 'синий',
                'image' => '156.jpg',
                'audio' => 'audio/156.mp3',
                'collections' => [
                    "Цвета",
                ],
            ],
            [
                'text' => 'фиолетовый',
                'image' => '157.jpg',
                'audio' => 'audio/157.mp3',
                'collections' => [
                    "Цвета",
                ],
            ],
            [
                'text' => 'коричневый',
                'image' => '158.jpg',
                'audio' => 'audio/158.mp3',
                'collections' => [
                    "Цвета",
                ],
            ],
            [
                'text' => 'розовый',
                'image' => '159.jpg',
                'audio' => 'audio/159.mp3',
                'collections' => [
                    "Цвета",
                ],
            ],
            [
                'text' => 'чёрный',
                'image' => '160.jpg',
                'audio' => 'audio/160.mp3',
                'collections' => [
                    "Цвета",
                ],
            ],
        ];

        $faker = Factory::create();
        $i = 400;
        $tagsCount = Tag::count();

        foreach ($words as $index => $wordData) {

            $wordCreated = new Word;
            $wordCreated->text = $wordData['text'];


            $srcPath = Storage::disk('seeder')->path('images/' . $wordData['image']);

            if (File::exists($srcPath)) {
                $wordCreated->addMediaFromDisk('/images/' . $wordData['image'], 'seeder')
                    ->preservingOriginal()
                    ->toMediaCollection('image');
            }

            $wordCreated->audio = $wordData['audio'];
            $wordCreated->save();


            $tag = Tag::find($faker->numberBetween(1, $tagsCount));
            $wordCreated->tags()->save($tag);

            if (array_key_exists('collections', $wordData)) {
                foreach ($wordData['collections'] as $collectionData) {
                    $selectedCollection = WordCollection::firstOrCreate([
                            'name' => $collectionData,
                            'slug' => Str::slug($collectionData),
                        ]
                    );
                    $wordCreated->wordCollections()
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
