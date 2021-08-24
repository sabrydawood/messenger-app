<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    const Admin = [
        'name' => 'John Doe',
        'email' => 'admin@example.net',
    ];

    public function run()
    {
        $this->call([
            UsersTableSeeder::class,
            ThreadsTableSeeder::class,
            MessagesTableSeeder::class,
            FriendsTableSeeder::class,
            BotSeeder::class,
        ]);    }
}
