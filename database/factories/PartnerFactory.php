<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Partner>
 */
class PartnerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "name" => fake()->company,
            "logo" => fake()->imageUrl,
            "address" => fake()->address,
            "email" => fake()->email,
            "telephone" => fake()->phoneNumber,
            "about" => fake()->sentence
        ];
    }
}
