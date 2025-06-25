<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        $title = fake()->sentence(mt_rand(3, 8)); // Judul yang lebih natural
        return [
            'title' => $title,
            'author_id' => User::factory(),
            'slug' => Str::slug($title),
            'body' => fake()->paragraph(mt_rand(5, 20)),
        ];
    }
}
