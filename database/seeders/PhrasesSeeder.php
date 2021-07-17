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
        $phrases = [
            'Автобус едет по дороге',
            'Девочка едет на велосипеде',
            'Деовчка играет на гитаре',
            'Девочка играет на компьтере',
            'Девочка пьёт молоко',
            'Девочка играет на планшете',
            'Мальчик и девочка играют в конструктор',
            'Мальчик едет на машине',
            'Мальчик едет на поезде',
            'Мальчик играет в машинки',
            'Мальчик едет на велосипеде',
            'Мальчик и девочка играют в куклы',
            'Мальчик играет в машинки',
            'Мальчик играет на гитаре',
            'Мальчик играет на компьютере',
            'Поезд едет по рельсам',
        ];

        $faker = Factory::create();

        $i = 500;
        $tagsCount = Tag::count();
        foreach ($phrases as $phrase) {
            $phraseCreated = new Phrase();
            $phraseCreated->text = $phrase;
            $phraseCreated->image = 'https://picsum.photos/id/' . $i.'/640/480';
            $phraseCreated->save();

            $tag = Tag::find($faker->numberBetween(1, $tagsCount));
            $phraseCreated->tags()->save($tag);
            $i++;
        }

    }
}
