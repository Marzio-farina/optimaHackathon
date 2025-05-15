<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\SportSeeder;
use Database\Seeders\EventiSeeder;
use Database\Seeders\MusicaSeeder;
use Database\Seeders\MeetingSeeder;
use Database\Seeders\BigliettoSeeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $this->call([
            UserSeeder::class,
            EventiSeeder::class,
            BigliettoSeeder::class,
            SportSeeder::class,
            MusicaSeeder::class,
            MeetingSeeder::class
        ]);
    }
}
