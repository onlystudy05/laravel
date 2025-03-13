<?php

namespace Database\Factories;

use App\Models\Annonces;
use Illuminate\Database\Eloquent\Factories\Factory;

class annoncesFactory extends Factory
{
    protected $model = Annonces::class;

    public function definition()
    {
        return [
            'titre' => $this->faker->word,
            'description' => $this->faker->sentence,
            'type' => $this->faker->randomElement(['Maison', 'Appartement', 'Villa']),
            'ville' => $this->faker->city,
            'superficie' => $this->faker->numberBetween(50, 200), // Corrected here
            'neuf' => $this->faker->boolean,
            'prix' => $this->faker->numberBetween(100000, 500000),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
