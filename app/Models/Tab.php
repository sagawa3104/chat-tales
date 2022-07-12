<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tab extends Model
{
    use HasFactory;

    public function Room()
    {
        return $this->belongsTo(Room::class);
    }

    public function Messages()
    {
        return $this->hasMany(Message::class);
    }
}
