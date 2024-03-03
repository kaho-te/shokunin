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
            'image' => 'dummy',
        ]);
        Type::create([
            'name' => 'GEIKO',
            'image' => 'dummy',

        ]);
        Type::create([
            'name' => 'MAIKO',
            'image' => 'dummy',

        ]);
        Type::create([
            'name' => 'SHAMISEN',
            'image' => 'dummy',
        ]);
    }
}
