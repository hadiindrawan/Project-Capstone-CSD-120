<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::truncate();

        \App\Models\User::create([
            'name' => "test",
            "email" => "test@gmail.com",
            "password" => Hash::make('12341234')
        ]);
        // \App\Models\User::factory(10)->create();
    }
}
