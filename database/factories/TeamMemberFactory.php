<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TeamMember>
 */
class TeamMemberFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            "name" => fake()->name,
            "type" => fake()->randomElement(["actor", "member"]),
            "position" => fake()->jobTitle,
            "website" => fake()->url,
            "email" => fake()->safeEmail,
            "telephone" => fake()->phoneNumber,
            "about" => fake()->paragraphs(2, true),
            "facebook" => fake()->url,
            "twitter" => fake()->url,
            "linkedin" => fake()->url,
            "instagram" => fake()->url
        ];
    }
}
