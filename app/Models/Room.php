<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    use HasFactory;

    public function hostAvatar()
    {
        return $this->belongsTo(Avatar::class, 'host_avatar_id');
    }

    public function guestAvatar()
    {
        return $this->belongsTo(Avatar::class, 'guest_avatar_id');
    }

    public function tabs()
    {
        return $this->hasMany(Tab::class);
    }
}
