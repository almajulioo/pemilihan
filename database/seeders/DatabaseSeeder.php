<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Role::create([
            "name"=> "pemilih",
        ]);
        Role::create([
            "name"=> "admin",
        ]);

        User::create([
            "name"=> "admin",
            'role_id' => 2,
            "email"=> "admin@gmail.com",
            "password"=> bcrypt("admin1234"),
        ]);
    }
}
