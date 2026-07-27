<?php

namespace Database\Factories;

use App\Models\Author;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $birthYear = fake()->numberBetween(1800, 1940);
        $deathYear = $birthYear + fake()->numberBetween(50, 95);

        return [
            'name' => fake()->firstName(),
            'surname' => fake()->lastName(),
            'birth_date' => $birthYear . '-' . fake()->date('m-d'),
            'death_date' => fake()->boolean(30) ? $deathYear . '-' . fake()->date('m-d') : null,
            'bio' => fake()->paragraph(),
        ];
    }
}
