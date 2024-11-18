<?php

namespace Database\Factories;

use Illuminate\Support\Str;
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
        $content = fake()->paragraphs(3, true);

        return [
            'date'        => fake()->dateTimeThisYear()->format('d-m-Y'),
            'hours'       => fake()->time('H:i'),
            'sport'       => fake()->randomElement(['Football', 'Basketball', 'Tennis', 'Rugby']),
            'team1'       => fake()->word(),
            'team2'       => fake()->word(),
            'pronostic'   => fake()->sentence(6),
            'cote'        => fake()->randomFloat(2, 1.3, 4.00),
            'content'     => $content,
            'excerpt'     => Str::limit($content, 150),
            'thumbnail'   => fake()->imageUrl(),
            'gratuit'     => fake()->boolean(),
            'publié'      => fake()->boolean(),
        ];
    }
}
