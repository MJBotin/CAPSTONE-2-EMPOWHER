<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    public function definition(): array
{
    return [
        'last_name' => $this->faker->lastName(),
        'first_name' => $this->faker->firstName(),
        'middle_name' => $this->faker->optional()->firstName(),
        'suffix' => $this->faker->optional()->randomElement(['Jr.', 'Sr.', 'III']),
        'birthdate' => $this->faker->date('Y-m-d', '2005-01-01'),
        'place_of_birth' => $this->faker->city(),
        'gender' => $this->faker->randomElement(['Male', 'Female']),
        'civil_status' => $this->faker->randomElement(['Single', 'Married', 'Widowed', 'Divorced']),
        'citizenship' => 'Filipino',
        'email' => $this->faker->unique()->safeEmail(),
        'contact_number' => $this->faker->numerify('09#########'),
        'address' => $this->faker->address(),
        'username' => $this->faker->unique()->userName(),
        'password' => Hash::make('Password@123'),
        'remember_token' => Str::random(10),
        'user_type' => $this->faker->randomElement(['user', 'admin', 'super admin']),
    ];
}

}


