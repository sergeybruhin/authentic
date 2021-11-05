<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;

class ProfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::all();
        $users->each(function (User $user) {
            Profile::factory()->count(3)
                ->afterMaking(function (Profile $profile) use ($user) {
                    $profile->user()->associate($user);
                })
                ->create();
        });
    }
}
