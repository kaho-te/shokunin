<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;

    public function get_artisans()
    {
        return $this->belongsToMany(Artisan::class);
    }

    public function get_reservations()
    {
        return $this->hasMany(Reservation::class);
    }
}
