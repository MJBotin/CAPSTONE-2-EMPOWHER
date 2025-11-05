<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class AnnouncementSeeder extends Seeder
{
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        // SAMPLE LANG TO
        for ($i = 0; $i < 10; $i++) {
            $startDate = $faker->dateTimeBetween('-1 week', 'now');
            $endDate = $faker->dateTimeBetween($startDate, '+2 weeks');
            $status = $faker->randomElement(['active', 'inactive']); 

            DB::table('announcements')->insert([
                'title'       => $faker->sentence(6),
                'content'     => $faker->paragraph(3),
                'date_started'=> $startDate,
                'date_end'    => $endDate,
                'status'      => $status,
                'created_by'  => 1, 
                'created_at'  => Carbon::now(),
                'updated_at'  => Carbon::now(),
            ]);
        }
    }
}
