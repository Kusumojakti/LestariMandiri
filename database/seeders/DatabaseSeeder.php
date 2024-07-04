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
            'username' => 'admin',
            'role' => 'admin',
        ]);
        User::factory()->create([
            'username' => 'sales',
            'role' => 'sales',
        ]);
        User::factory()->create([
            'username' => 'driver',
            'role' => 'driver',
        ]);
        User::factory()->create([
            'username' => 'owner',
            'role' => 'owner',
        ]);
    }
}
