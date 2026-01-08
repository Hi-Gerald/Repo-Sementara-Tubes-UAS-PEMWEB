<?php

namespace App\Classes;

use App\Classes\User;

class Admin extends User
{
    public function overrideDevice($device)
    {
        $device->status = $device->status === 'on' ? 'off' : 'on';
        return "Perangkat {$device->type} diubah menjadi {$device->status}";
    }
}

