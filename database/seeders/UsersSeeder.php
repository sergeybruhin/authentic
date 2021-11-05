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
        })->create();
    }
}
