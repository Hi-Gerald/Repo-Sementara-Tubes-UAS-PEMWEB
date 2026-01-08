<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RoomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\Room::insert([
            ['name' => 'A-101', 'location' => 'Gedung A Lantai 1'],
            ['name' => 'B-201', 'location' => 'Gedung B Lantai 2'],
            ['name' => 'C-301', 'location' => 'Gedung C Lantai 3'],
        ]);
    }
}
