<?php

namespace Database\Factories;

use App\Models\Tour;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TourGroup>
 */
class TourGroupFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $startDate = $this->faker->dateTimeBetween('+1 month', '+1 year');
        $maxPeople = $this->faker->numberBetween(5, 20);

        return [
            'tour_id' => Tour::factory(),
            'starts_at' => $startDate,
            'max_people' => $maxPeople,
            'current_people' => $this->faker->numberBetween(0, $maxPeople),
            'price_cents' => $this->faker->numberBetween(5000, 50000),
            'status' => fake()->randomElement(['draft', 'open', 'closed', 'cancelled']),
        ];
    }
}
