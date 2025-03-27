<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SujetSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Sujet::factory(10)->create(); // Generate 10 sujets
    }
}
