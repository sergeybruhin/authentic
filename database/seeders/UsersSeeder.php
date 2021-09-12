<?php

namespace Database\Seeders;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->afterMaking(function (User $user) {
            $user->name = config('custom.admin.name');
            $user->email = config('custom.admin.email');
            $user->password = Hash::make(config('custom.admin.password'));
        })->afterCreating(function (User $user) {

            $profile = new Profile();
            $profile->name = 'Профиль 1';
            $profile->slug = 'profile-1';
            $profile->user()->associate($user);
            $profile->save();

            $profile = new Profile();
            $profile->name = 'Профиль 2';
            $profile->slug = 'profile-2';
            $profile->user()->associate($user);
            $profile->save();

        })->create();
    }
}
