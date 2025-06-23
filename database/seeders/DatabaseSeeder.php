<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'testuser@example.com',
            'password' => Hash::make('testuser123'),
            'role' => 'user',
        ]);
        User::factory()->create([
            'name' => 'Test admin',
            'email' => 'testadmin@example.com',
            'password' => Hash::make('testadmin123'),
            'role' => 'admin',
        ]);

        $this->call([
            MentorSeeder::class,
            SiswaSeeder::class,
            FlightSeeder::class
        ]);
    }
}
