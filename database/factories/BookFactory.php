<?php

namespace Database\Factories;

use App\Models\Author;
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
            'title' => $this->faker->sentence(),
            'price' => $this->faker->randomFloat(2, 5, 30),
            'storedAmount' => $this->faker->numberBetween(0, 100),
            'genre' => $this->faker->randomElement(['Fiction', 'Non-Fiction', 'Biography']),
            'author_id' => Author::inRandomOrder()->first()->id
        ];
    }
}
