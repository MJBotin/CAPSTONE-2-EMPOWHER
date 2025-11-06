<?php

namespace Database\Factories;

use App\Models\AuditLog;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class AuditLogFactory extends Factory
{
    protected $model = AuditLog::class;

    public function definition()
    {
        return [
            'staff_id' => User::inRandomOrder()->first()->id,
            'date' => $this->faker->dateTimeBetween('-1 month', 'now'),
        ];
    }
}
