<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $rooms = \App\Models\Room::all();

        foreach ($rooms as $room) {
            \App\Models\Device::insert([
                ['room_id' => $room->id, 'type' => 'AC', 'brand' => 'Panasonic', 'status' => 'off', 'temperature' => 24],
                ['room_id' => $room->id, 'type' => 'Lampu', 'brand' => 'Philips', 'status' => 'on', 'temperature' => null],
            ]);
        }
    }
}
