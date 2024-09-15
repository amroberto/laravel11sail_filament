<?php

namespace Database\Seeders;

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
            'name' => 'Administrator',
            'password' => bcrypt('password'),
            'email' => 'admin@admin.com',
            'is_admin' => true
        ]);

        User::factory()->create([
            'name' => 'User',
            'password' => bcrypt('password'),
            'email' => 'user@user.com',
            'is_admin' => false
        ]);
    }
}
