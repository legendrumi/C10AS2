<?php

namespace Database\Factories;

use App\Models\Author;
use App\Models\Book;
use App\Models\Category;
use App\Models\Language;
use App\Models\Publisher;
use App\Models\Year;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Book>
 */
class BookFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => Category::inRandomOrder()->first()->id,
            'author_id' => Author::inRandomOrder()->first()->id,
            'year_id' => Year::inRandomOrder()->first()->id,
            'language_id' => Language::inRandomOrder()->first()->id,
            'publisher_id' => Publisher::inRandomOrder()->first()->id,
            'name' => fake()->words(3, true),
            'page_number' => fake()->numberBetween(100, 800),
            'code' => fake()->uuid(),
        ];
    }
}