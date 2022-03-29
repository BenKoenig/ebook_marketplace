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
            'price' => 9.99,
            'cover' => 'temp.png',
            'banner' => 'temp.png',
            'epub' => 'temp.epub',
            'is_featured' => false,

            'user_id' => function() {
                return User::all()->random();
            },
            'created_at' => $this->faker->dateTimeBetween('-3 years', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('2020-04-03', '2022-02-07'),
        ];
    }


}
