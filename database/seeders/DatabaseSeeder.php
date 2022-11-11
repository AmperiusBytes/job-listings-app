<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        // \App\Models\User::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        $user = \App\Models\User::factory()->create([
            'name' => 'John Doe',
            'email' => 'John@gmail.com'
        ]);

        \App\Models\Listing::factory(10)->create([
            'user_id' => $user->id
        ]);
    }
}
