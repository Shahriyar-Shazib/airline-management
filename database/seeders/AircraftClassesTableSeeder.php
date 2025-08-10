<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AircraftClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('aircraft_classes')->insert([
            ['name' => 'Economy'],
            ['name' => 'Business'],
            ['name' => 'First Class'],
        ]);
    }
}
