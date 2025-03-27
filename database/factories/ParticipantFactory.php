<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participant>
 */

class ParticipantFactory extends Factory
{
    public function definition()
    {
        return [
            'nom' => $this->faker->name(),
            'email' => $this->faker->unique()->safeEmail(),
            'dateNaissance' => $this->faker->date(),
            'MotdePasse' => bcrypt('password'), // Default password for testing
        ];
    }
}

