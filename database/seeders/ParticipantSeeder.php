<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ParticipantSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Participant::factory(10)->create(); // Generate 10 participants
    }
}

