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
            'score' => $this->faker->randomDigit(),
            'cover' => $this->faker->randomElement($array = array ('covers/cover-1.jpg', 'covers/cover-2.jpg', 'covers/cover-3.jpg', 'covers/cover-4.jpg','covers/cover-5.jpg','covers/cover-6.jpg','covers/cover-7.jpg','covers/cover-8.jpg')),
            'epub' => 'epubs/showcase.epub',
            'is_featured' => $this->faker->boolean($chanceOfGettingTrue = 6),
            'is_public' => $this->faker->boolean($chanceOfGettingTrue = 80),
            'user_id' => function() {
                return User::all()->random();
            },
            'created_at' => $this->faker->dateTimeBetween('-3 years', 'now'),
            'updated_at' => $this->faker->dateTimeBetween('2020-04-03', '2022-02-07'),
        ];
    }


}
