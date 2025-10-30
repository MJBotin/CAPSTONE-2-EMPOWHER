<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory(count: 10)->create();

        User::create([
            'last_name' => 'Admin',
            'first_name' => 'System',
            'middle_name' => null,
            'suffix' => null,
            'birthdate' => '1990-01-01',
            'place_of_birth' => 'Manila',
            'gender' => 'Male',
            'civil_status' => 'Single',
            'citizenship' => 'Filipino',
            'email' => 'admin@barangay.test',
            'contact_number' => '09171234567',
            'address' => 'Barangay Admin Office',
            'username' => 'admin',
            'password' => Hash::make('Admin@123'),
            'user_type' => 'admin',
        ]);

        User::create([
            'last_name' => 'Super',
            'first_name' => 'Admin',
            'middle_name' => null,
            'suffix' => null,
            'birthdate' => '1985-01-01',
            'place_of_birth' => 'Quezon City',
            'gender' => 'Female',
            'civil_status' => 'Married',
            'citizenship' => 'Filipino',
            'email' => 'superadmin@barangay.test',
            'contact_number' => '09181234567',
            'address' => 'Barangay Main Office',
            'username' => 'superadmin',
            'password' => Hash::make('Super@123'),
            'user_type' => 'super admin',
        ]);
    }
}
