<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        // == https://laravel.com/docs/8.x/database-testing#defining-model-factories

        // == https://github.com/fzaninotto/Faker

        return [
            'user_id' => function() {
                return User::all()->random();
            },
            'product_id' => function() {
                return User::all()->random();
            },
            'purchased_price' => $this->faker->randomFloat(2, 0, 50),
            'created_at' => $this->faker->dateTimeBetween('-3 years', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('2020-04-03', '2022-02-07'),
        ];
    }


}
