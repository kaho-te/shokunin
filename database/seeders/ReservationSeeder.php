<?php

namespace Database\Seeders;

use App\Models\Reservation;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ReservationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Reservation::create([
            'last_name' => 'ジャイロ',
            'first_name' => 'ツェペリ',
            'tell' => '12345678901',
            'mail' => 'gyro@example.com',
            'allergy' => '卵',
            'request' => 'リクエストを記載',
            'adult_scale' => 3,
            'child_scale' => 2,
            'date' => '2024/3/1',
            'status' => 0,
            'package_id' => 1,
            'user_id' => 4,
        ]);
    }
}
