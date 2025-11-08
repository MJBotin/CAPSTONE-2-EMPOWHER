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
        // 1. Create a default Admin User first. This user will have ID = 1.
        User::factory()->create([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'email' => 'admin@example.com',
            'username' => 'admin',
            'user_type' => 'admin', // Set the user type to admin
        ]);

        // 2. Now, call the other seeders that depend on this user.
        $this->call([
            AnnouncementSeeder::class,
            OfficialSeeder::class,
        ]);
    }
}