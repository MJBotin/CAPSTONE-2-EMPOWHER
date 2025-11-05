<?php

namespace Database\Factories;

use App\Models\BarangayOfficial;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class BarangayOfficialFactory extends Factory
{
    protected $model = BarangayOfficial::class;

    public function definition(): array
    {
        return [
            'last_name' => $this->faker->lastName,
            'first_name' => $this->faker->firstName,
            'middle_initial' => strtoupper($this->faker->randomLetter),
            'position' => $this->faker->jobTitle,
            'photo_path' => null,
            'created_by' => User::whereIn('user_type', ['admin', 'super admin'])
                                ->inRandomOrder()->first()->id,
        ];
    }
}
