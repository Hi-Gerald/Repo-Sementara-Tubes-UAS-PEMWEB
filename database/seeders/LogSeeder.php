<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $user = \App\Models\User::first();
        $devices = \App\Models\Device::all();

        foreach ($devices as $device) {
            \App\Models\Log::create([
                'user_id' => $user->id,
                'device_id' => $device->id,
                'action' => 'Override',
                'note' => 'Manual override untuk pengujian',
                'timestamp' => now(),
            ]);
        }
    }
}
