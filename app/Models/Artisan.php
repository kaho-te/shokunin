<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Artisan extends Model
{
    use HasFactory;

    public function get_types()
    {
        return $this->belongsToMany(Type::class);
    }

    public function get_packages()
    {
        return $this->belongsToMany(Package::class);
    }
}
