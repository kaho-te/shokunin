<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtisanTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artisan_type')->insert([
            'artisan_id' => 1,
            'type_id' => 1,
        ]);
        DB::table('artisan_type')->insert([
            'artisan_id' => 2,
            'type_id' => 2,
        ]);
        DB::table('artisan_type')->insert([
            'artisan_id' => 3,
            'type_id' => 3,
        ]);
        DB::table('artisan_type')->insert([
            'artisan_id' => 4,
            'type_id' => 4,
        ]);
        DB::table('artisan_type')->insert([
            'artisan_id' => 1,
            'type_id' => 4,
        ]);
    }
}
