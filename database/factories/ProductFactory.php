<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->words(3, true), // Generates a random product name
            'description' => $this->faker->sentence(), // Random product description
            'category_name' => $this->faker->word(), // A single random category name
            'image' => $this->faker->imageUrl(640, 480, 'products', true), // Fake product image URL
            'price' => $this->faker->numberBetween(10, 5000), // Random price between 10 and 5000
        ];
    }
}
