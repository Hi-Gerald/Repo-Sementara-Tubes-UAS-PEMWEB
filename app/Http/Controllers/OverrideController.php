<?php

namespace App\Http\Controllers;

use App\Models\Device;
use Illuminate\Http\Request;

class OverrideController extends Controller
{
    public function index()
    {
        $devices = Device::with('room')->get();
        return view('override', compact('devices'));
    }

    public function toggle(Device $device)
    {
        $device->status = $device->status === 'on' ? 'off' : 'on';
        $device->save();

        return redirect()->back()->with('success', 'Status perangkat diperbarui.');
    }
}
