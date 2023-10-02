<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Department;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::factory()->create([
            'name' => 'Aria Maulana',
            'email' => 'aria@gmail.com',
            'password' => bcrypt('password'),
            'is_admin' => true,
        ]);

        $this->call([
            CountrySeeder::class,
            StatesSeeder::class,
            CitiesSeeder::class,
        ]);

        // Department::create(['name' => 'Laravel']);
    }
}
