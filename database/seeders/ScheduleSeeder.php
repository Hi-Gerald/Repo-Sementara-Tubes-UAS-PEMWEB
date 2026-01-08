<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScheduleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $rooms = \App\Models\Room::all();

        foreach ($rooms as $room) {
            \App\Models\Schedule::create([
                'room_id' => $room->id,
                'start_time' => now()->addDays(1)->setTime(8, 0),
                'end_time' => now()->addDays(1)->setTime(10, 0),
                'activity' => 'Kelas PBO',
            ]);
        }
    }
}
