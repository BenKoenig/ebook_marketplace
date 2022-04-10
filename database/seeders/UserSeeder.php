<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \App\Models\User::factory(50)->create();

        \App\Models\User::factory()->create([
            'firstname' => 'Admin',
            'lastname' => 'Guy',
            'username' => 'Admin',
            'email' => 'me@m.com',
            'password' => bcrypt('letmein'),
        ]);
    }
}
