<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;

    public function get_package()
    {
        return $this->belongsTo(Package::class);
    }

    public function get_user()
    {
        return $this->belongsTo(User::class);
    }
}
