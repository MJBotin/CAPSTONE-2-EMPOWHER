<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BarangayOfficial;

class BarangayOfficialSeeder extends Seeder
{
    public function run(): void
    {
        BarangayOfficial::factory()->count(5)->create();
    }
}
