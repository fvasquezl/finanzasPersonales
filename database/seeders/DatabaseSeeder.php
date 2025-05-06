<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Faustino Vasquez Limon',
            'email' => 'fvasquez@local.com',
            'password' => bcrypt('12345678'),
        ]);

        User::factory()->create([
            'name' => 'Sebastian Vasquez Limon',
            'email' => 'svasquez@local.com',
            'password' => bcrypt('12345678'),
        ]);

        Categoria::factory()->times(10)->create();
    }
}
