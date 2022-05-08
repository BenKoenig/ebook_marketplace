<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductFactory extends Factory
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

            'name' => $this->faker->unique()->catchPhrase,
            'description' => $this->faker->text,
            'snippet' => $this->faker->text,
            'short_description' => $this->faker->text,
            'price' => $this->faker->randomFloat(2, 0, 50),
            'sale_price' => '',
            'cover' => 'covers/wZkYeIFj0EvCNNlvRD5fmyrIwS2yK0RfybYlFtbz.jpg',
            'epub' => '9781538745830.epub',
            'is_featured' => false,
            'user_id' => function() {
                return User::all()->random();
            },
            'created_at' => $this->faker->dateTimeBetween('-3 years', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('2020-04-03', '2022-02-07'),
        ];
    }


}
