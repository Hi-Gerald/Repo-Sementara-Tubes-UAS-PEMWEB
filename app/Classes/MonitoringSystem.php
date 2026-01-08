<?php

namespace App\Classes;

class MonitoringSystem
{
    protected $rooms = [];

    public function addRoom($room)
    {
        $this->rooms[] = $room;
    }

    public function listDevices()
    {
        foreach ($this->rooms as $room) {
            echo "Ruangan: {$room->name}\n";
            foreach ($room->devices as $device) {
                echo "- {$device->type} ({$device->status})\n";
            }
        }
    }
}
