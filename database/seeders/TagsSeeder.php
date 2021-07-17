<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tags = [
            'Простые',
            'Сложные',
            'Средние',
            'Для девочек',
            'Для мальчиков',
        ];

        foreach ($tags as $tag) {
            Tag::factory()->afterMaking(function ($tagCreated) use ($tag) {
                $tagCreated->name = $tag;
                $tagCreated->slug = Str::slug($tag);
            })->create();
        }

    }
}
