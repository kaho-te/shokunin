<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtisanPackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('artisan_package')->insert([
            'artisan_id' => 1,
            'package_id' => 1,
        ]);
        DB::table('artisan_package')->insert([
            'artisan_id' => 2,
            'package_id' => 1,
        ]);
        DB::table('artisan_package')->insert([
            'artisan_id' => 3,
            'package_id' => 1,
        ]);
        DB::table('artisan_package')->insert([
            'artisan_id' => 4,
            'package_id' => 2,
        ]);
        DB::table('artisan_package')->insert([
            'artisan_id' => 1,
            'package_id' => 2,
        ]);
    }
}
