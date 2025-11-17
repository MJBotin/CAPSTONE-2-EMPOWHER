<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'first_name' => fake()->firstName(),
            'last_name' => fake()->lastName(),
            'middle_name' => fake()->randomLetter(),
            'suffix' => null,
            'username' => fake()->unique()->userName(),
            'gender' => fake()->randomElement(['Male', 'Female']),
            'birthdate' => fake()->date(),
            'civil_status' => fake()->randomElement(['Single', 'Married', 'Widowed']),
            'place_of_birth' => fake()->city(),
            'citizenship' => 'Filipino',
            'contact_number' => fake()->phoneNumber(),
            'email' => fake()->unique()->safeEmail(),
            'address' => fake()->address(),
            'password' => static::$password ??= Hash::make('password'),
            'user_type' => 'user',
            'registration_status' => 'approved',
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}