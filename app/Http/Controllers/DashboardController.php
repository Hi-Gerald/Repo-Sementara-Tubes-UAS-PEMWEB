<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Consumption;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $rooms = Room::with('devices')->get();
        $consumptions = Consumption::orderBy('date', 'desc')->take(7)->get();

        return view('dashboard', compact('rooms', 'consumptions'));
    }
}

