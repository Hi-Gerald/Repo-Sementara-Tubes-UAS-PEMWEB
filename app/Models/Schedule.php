<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model; 
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Schedule extends Model
{
    use HasFactory;

    public function room() {
        return $this->belongsTo(Room::class);
    }
}

