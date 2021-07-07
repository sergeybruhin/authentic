<?php

namespace Database\Seeders;

use App\Models\Collection;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CollectionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $collections = [
            'Овощи',
            'Фрукты',
            'На кухне',
            'Авто',
            'Люди',
            'Професии',
            'Действия'
        ];

        foreach ($collections as $collection) {
            $collectionCreated = new Collection();
            $collectionCreated->name = $collection;
            $collectionCreated->slug = Str::slug($collection);
            $collectionCreated->save();
        }
    }
}
