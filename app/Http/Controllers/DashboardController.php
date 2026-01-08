<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Consumption;
use Illuminate\Http\Request;
use App\Classes\Admin;
use App\Classes\MonitoringSystem;

class DashboardController extends Controller
{
    public function index()
    {
        $rooms = collect(config('dummy.rooms'));
        $consumptions = collect(config('dummy.consumptions'));

        $admin = new Admin("Gerald", "admin@example.com", "password123");

        $device = (object)[ 'type' => 'AC', 'status' => 'off' ];
        $overrideMessage = $admin->overrideDevice($device);

        $monitoring = new MonitoringSystem();
        foreach ($rooms as $room) {
            $monitoring->addRoom((object) $room);
        }

        return view('dashboard', compact('rooms', 'consumptions', 'overrideMessage', 'device'));
    }
}


