<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AircraftsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('aircraft')->insert([
            ['model' => 'Boeing 737', 'manufacturer' => 'Boeing', 'code' => 'B737', 'total_seats' => 160],
            ['model' => 'Airbus A320', 'manufacturer' => 'Airbus', 'code' => 'A320', 'total_seats' => 150],
        ]);
    }
}
