<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'name' => $this->faker->name(),
        'email' => $this->faker->unique()->safeEmail(), // Ensures unique emails
        'email_verified_at' => now(),
        'password' => bcrypt('password'), // Example password
        'address' => $this->faker->address(),
        'phone_number' => $this->faker->numerify('##########'),
        'gender' => $this->faker->randomElement([0, 1]), // 0 = Male, 1 = Female
        'photo' => $this->faker->imageUrl(200, 200, 'profile'),
        'remember_token' => \Illuminate\Support\Str::random(10),
    ];
}


    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
