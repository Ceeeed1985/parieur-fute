<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pronostic>
 */
class PronosticFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $date           = fake()->dateTimeThisYear()->format('Y-m-d H:i:s');
        $sport          = fake()->randomElement(['Football', 'Basketball', 'Tennis', 'Rugby']);
        $match          = fake()->sentence(3);
        $pronostic      = fake()->sentence(6);
        $cote           = fake()->randomFloat(2, 1.3, 4.00);
        $description    = fake()->paragraph();
        $gratuit        = fake()->boolean();
        $publié         = fake()->boolean(); 
        
        return [
            'date'        => $date,
            'sport'       => $sport,
            'match'       => $match,
            'pronostic'   => $pronostic,
            'cote'        => $cote,
            'description' => $description,
            'gratuit'     => $gratuit,
            'publié'      => $publié,

        ];
    }
}
