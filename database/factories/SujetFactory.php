<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class SujetFactory extends Factory
{
    public function definition()
    {
        return [
            'intitule' => $this->faker->sentence(),
            'description' => $this->faker->paragraph(),
            'ProposerPar' => \App\Models\Participant::factory(), // Foreign key relation
        ];
    }
}

