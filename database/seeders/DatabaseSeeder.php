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
        // Generate the Admin User
        User::factory()->admin()->create();

        $this->call([
            CategorySeeder::class,
            PostSeeder::class,
        ]);
    }
}
