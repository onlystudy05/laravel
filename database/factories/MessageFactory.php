<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MessageFactory extends Factory
{
    public function definition()
    {
        return [
            'Titre' => $this->faker->sentence(),
            'Texte' => $this->faker->paragraph(),
            'dateMessage' => $this->faker->date(),
            'codeSujet' => \App\Models\Sujet::factory(), // Foreign key relation
        ];
    }
}

