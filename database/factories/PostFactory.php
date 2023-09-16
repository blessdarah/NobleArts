<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "user_id" => User::inRandomOrder()->first()->id,
            "category_id" => Category::inRandomOrder()->first()->id,
            "title" => fake()->sentence,
            "slug" => fake()->slug,
            "summary" => fake()->sentences(3, true),
            "detail" => fake()->paragraphs(3, true),
            "is_published" => fake()->randomElement([true, false])
        ];
    }
}
