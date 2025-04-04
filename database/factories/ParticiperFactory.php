<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Participer>
 */
class ParticiperFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            //
            'codeParticipant' => \App\Models\Participant::factory(),
            'codeMessage' => \App\Models\Message::factory(),

            
        ];
    }
}
