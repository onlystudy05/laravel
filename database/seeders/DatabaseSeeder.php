<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call(FilmsSeeder::class);
        $this->call(AnnonceSeeder::class);
        $this->call([
            ParticipantSeeder::class,
            SujetSeeder::class,
            MessageSeeder::class,
            ParticiperSeeder::class,
        ]);
    }
}
