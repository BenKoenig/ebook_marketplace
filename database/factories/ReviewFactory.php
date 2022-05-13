<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text,
            'review' => $this->faker->text,
            'rating' => $this->faker->numberBetween($min = 1, $max = 5),
            'user_id' => function() {
                return User::all()->random();
            },
            'created_at' => $this->faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null),
            'updated_at' => $this->faker->dateTimeBetween($startDate = '-30 years', $endDate = 'now', $timezone = null),
        ];
    }
}
