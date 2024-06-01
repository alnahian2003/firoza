<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = [
            'Tech',
            'Design',
            'Food',
            'Travel',
            'Business',
            'Lifestyle',
            'Health',
            'Science',
            'Music',
            'Art',
        ];

        $category = fake()->unique()->randomElement($categories);

        return [
            'name' => $category,
            'slug' => str($category)->slug(),
        ];
    }
}
