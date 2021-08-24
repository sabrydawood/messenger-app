<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FriendSeeder extends Seeder
{
    public function run(): void
    {
        $users = User::all();

        // Make ALL users friends with one another
        foreach ($users as $user) {
            $others = $users->where('email', '!=', $user->email)->all();

            foreach ($others as $other) {
                if (Friend::forProvider($user)->forProvider($other, 'party')->doesntExist()) {
                    Friend::factory()->providers($user, $other)->create();
                    Friend::factory()->providers($other, $user)->create();
                }
            }
        }
    }
}
