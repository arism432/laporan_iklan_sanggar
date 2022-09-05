<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'name' => 'Admin User',
                'email' => 'admin@sanggar.co.id',
                'is_admin' => 1,
                'password' => bcrypt('123456'),
            ],
            [
                'name' => 'Guest User',
                'email' => 'guest@sanggar.co.id',
                'is_admin' => 0,
                'password' => bcrypt('123456'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
