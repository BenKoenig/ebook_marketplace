<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $users = \App\Models\User::factory(10)->create();


        \App\Models\User::factory()->create([
            'name' => 'Admin Guy',
            'email' => 'me@m.com',
            'password' => bcrypt('letmein'),
        ]);

        foreach ($users as $user) {
            \App\Models\Product::factory(10)->create([
                'user_id' => $user->id,
            ]);
        }
    }
}
