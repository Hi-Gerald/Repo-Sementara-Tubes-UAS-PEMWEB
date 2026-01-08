<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ConsumptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $rooms = \App\Models\Room::all();

        foreach ($rooms as $room) {
            for ($i = 1; $i <= 7; $i++) {
                \App\Models\Consumption::create([
                    'room_id' => $room->id,
                    'date' => now()->subDays($i),
                    'amount' => rand(5, 15) + rand(0, 99)/100, // kWh
                ]);
            }
        }
    }
}
