<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class FilmsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('films')->insert([[
            'titre' => Str::random(10),
            'pays' => Str::random(7),
            'annee' => random_int(1900, 2025),
            'genre' => Str::random(10),
            'duree' => random_int(20, 100),
        ],[
            'titre' => Str::random(10),
            'pays' => Str::random(7),
            'annee' => random_int(1900, 2025),
            'genre' => Str::random(10),
            'duree' => random_int(20, 100),
        ],[
            'titre' => Str::random(10),
            'pays' => Str::random(7),
            'annee' => random_int(1900, 2025),
            'genre' => Str::random(10),
            'duree' => random_int(20, 100),
        ],[
            'titre' => Str::random(10),
            'pays' => Str::random(7),
            'annee' => random_int(1900, 2025),
            'genre' => Str::random(10),
            'duree' => random_int(20, 100),
        ]]);
    }
}
