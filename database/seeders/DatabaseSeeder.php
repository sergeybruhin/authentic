<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->afterMaking(function (User $user) {
            $user->email = 'admin@admin.com';
        })->create();

        $this->call(TagsSeeder::class);
//        $this->call(CollectionsSeeder::class);
//        $this->call(WordCollectionSeeder::class);
        $this->call(WordsSeeder::class);
        $this->call(PhrasesSeeder::class);

        // \App\Models\User::factory(10)->create();
    }
}
