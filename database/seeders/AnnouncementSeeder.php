<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Announcement; 

class AnnouncementSeeder extends Seeder
{
    public function run(): void
    {
        Announcement::create([
            'title' => 'Community Cleanup Drive',
            'content' => 'Join us this Saturday for a community-wide cleanup event...',
            'start_date' => '2024-05-10', 
            'end_date' => '2024-05-20',   
            'created_by' => 1, 
        ]);

        Announcement::create([
            'title' => 'Free Vaccination Program',
            'content' => 'We are offering free anti-flu shots for all senior citizens...',
            'start_date' => '2024-05-15', 
            'end_date' => '2024-05-30',   
            'created_by' => 1, 
        ]);

        Announcement::create([
            'title' => 'Basketball Tournament Registration',
            'content' => 'Registration for the annual inter-zone basketball league is now open...',
            'start_date' => '2024-05-20',
            'end_date' => '2024-06-10',   
            'created_by' => 1, 
        ]);
    }
}