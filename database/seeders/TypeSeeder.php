<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::create([
            'name' => 'NIHONSHU',
            'icon' => 'icon_dummy',
            'image' => 'dummy',
        ]);
        Type::create([
            'name' => 'GEIKO',
            'icon' => 'icon_dummy',
            'image' => 'dummy',
        ]);
        Type::create([
            'name' => 'MAIKO',
            'icon' => 'icon_dummy',
            'image' => 'dummy',

        ]);
        Type::create([
            'name' => 'SHAMISEN',
            'icon' => 'icon_dummy',
            'image' => 'dummy',
        ]);
    }
}
