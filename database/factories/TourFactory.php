<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tour>
 */
class TourFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tour_category_id' => \App\Models\TourCategory::factory(), // ← создаём категорию на лету
            'title'            => fake()->words(3, true),
            'description'      => fake()->paragraph(),
            'base_price_cents' => fake()->numberBetween(500_000, 5_000_000),
            'duration_days'    => fake()->numberBetween(3, 14),
        ];
    }
}
