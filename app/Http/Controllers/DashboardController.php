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
        // Ambil data dummy dari config
        $rooms = collect(config('dummy.rooms'));
        $consumptions = collect(config('dummy.consumptions'));

        // Inisialisasi admin dan override perangkat
        $admin = new Admin("Gerald", "admin@example.com", "password123");
        $device = (object)[ 'type' => 'AC', 'status' => 'off' ];
        $overrideMessage = $admin->overrideDevice($device);

        // Monitoring sistem: tambahkan semua ruangan
        $monitoring = new MonitoringSystem();
        foreach ($rooms as $room) {
            $monitoring->addRoom((object) $room);
        }

        // Tambahkan notifikasi dummy
        $notifications = [
            (object)[
                'title' => 'Pemakaian Listrik Tinggi',
                'message' => 'Ruangan A mengalami lonjakan konsumsi',
                'time' => '2 menit lalu',
                'bgColor' => 'bg-red-100',
                'color' => 'text-red-500',
            ],
            (object)[
                'title' => 'Perangkat Dimatikan Manual',
                'message' => 'AC di Ruangan B dimatikan oleh admin',
                'time' => '10 menit lalu',
                'bgColor' => 'bg-yellow-100',
                'color' => 'text-yellow-500',
            ],
            (object)[
                'title' => 'Penghematan Energi',
                'message' => 'Ruangan C berhasil menurunkan konsumsi 20%',
                'time' => '1 jam lalu',
                'bgColor' => 'bg-green-100',
                'color' => 'text-green-500',
            ],
        ];

        // Kirim semua data ke view dashboard
        return view('dashboard', compact(
            'rooms',
            'consumptions',
            'overrideMessage',
            'device',
            'notifications'
        ));
    }
}
