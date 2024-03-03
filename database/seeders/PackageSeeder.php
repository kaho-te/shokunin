<?php

namespace Database\Seeders;

use App\Models\Package;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PackageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Package::create([
            'name' => 'A package',
            'image' => 'dummy',
            'description' => 'TEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXT',
            'plan' => '・TEXTTEXTTEXTTEXTTEXT
            ・TEXTTEXTTEXTTEXTTEXT
            ・TEXTTEXTTEXTTEXTTEXT
            ・TEXTTEXTTEXTTEXTTEXT',
            'start_date' => '2024/3/1',
            'end_date' => '2024/3/31',
            'min_guest_num' => 2,
            'max_guest_num' => 6,
            'adult_price' => 8000,
            'child_price' => 4000,
            'recommend_flag' => 1,
        ]);
        Package::create([
            'name' => 'B package',
            'image' => 'dummy',
            'description' => 'TEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXT',
            'plan' => '・TEXTTEXTTEXTTEXTTEXT
            ・TEXTTEXTTEXTTEXTTEXT
            ・TEXTTEXTTEXTTEXTTEXT
            ・TEXTTEXTTEXTTEXTTEXT',
            'start_date' => '2024/4/1',
            'end_date' => '2024/4/30',
            'min_guest_num' => 1,
            'max_guest_num' => 8,
            'adult_price' => 9000,
            'child_price' => 4500,
            'recommend_flag' => 0,
        ]);
        Package::create([
            'name' => 'Craftsman DX package',
            'image' => 'dummy',
            'description' => 'TEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXTTEXT',
            'plan' => '・TEXTTEXTTEXTTEXTTEXT
            ・TEXTTEXTTEXTTEXTTEXT
            ・TEXTTEXTTEXTTEXTTEXT
            ・TEXTTEXTTEXTTEXTTEXT',
            'start_date' => '2024/3/1',
            'end_date' => '2024/3/31',
            'min_guest_num' => 1,
            'max_guest_num' => 8,
            'adult_price' => 10000,
            'child_price' => 5000,
            'recommend_flag' => 1,
        ]);
    }
}
