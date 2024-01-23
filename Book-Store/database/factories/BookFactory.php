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
            'category_ids' => fake()->sentence(),
            'title' => fake()->sentence(),
            'author' => fake()->sentence(),
            'price' => rand(1, 200),
            'quantity' => rand(1,200),
            'image_path' => fake()->sentence()
        ];
    }
}
