<?php

namespace Database\Factories;

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
            /*'price' => 9.99,*/
            /*'book_cover' => 'cover.png',*/
            /*'sale_price' => 4.99,
            'is_featured' => false,*/
            'created_at' => $this->faker->dateTimeBetween('-3 years', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('2020-04-03', '2022-02-07'),
        ];
    }


}
