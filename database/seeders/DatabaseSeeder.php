<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
<<<<<<< HEAD
=======

>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6
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
<<<<<<< HEAD
        \App\Models\User::factory(50)->create();
        \App\Models\Team::factory(50)->create();
=======
        \App\Models\User::factory(100)->create();
        \App\Models\Team::factory(100)->create();
>>>>>>> 7e91912cb809f8841388c30df8462a6d5c7017c6

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
