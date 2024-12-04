<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Book>
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
            "title"=> $this->faker->words(3, true),
            "author"=> $this->faker->name(),
            "price"=> $this->faker->randomFloat(2, 0, 100),
            "qty"=> $this->faker->numberBetween(0, 1000),
            "pages"=> $this->faker->numberBetween(10, 1000),
        ];
    }
}