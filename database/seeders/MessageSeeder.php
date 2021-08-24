<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;



class MessageSeeder extends Seeder
{



    public function run(): void
    {
        // Seed ALL threads with messages
        Thread::with('participants.owner')->get()->each(function (Thread $thread) {
            for ($x = 0; $x < rand(5, 20); $x++) {
                Message::factory()
                    ->for($thread)
                    ->owner($thread->participants->random()->owner)
                    ->create();
            }
        });
    }
}
