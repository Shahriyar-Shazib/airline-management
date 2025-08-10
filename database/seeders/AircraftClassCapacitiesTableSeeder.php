<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AircraftClassCapacitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('aircraft_class_capacities')->insert([
            ['aircraft_id' => 1, 'aircraft_class_id' => 1, 'seat_count' => 120], // Economy seats on Boeing 737
            ['aircraft_id' => 1, 'aircraft_class_id' => 2, 'seat_count' => 40],  // Business seats on Boeing 737
            ['aircraft_id' => 2, 'aircraft_class_id' => 1, 'seat_count' => 130], // Economy seats on Airbus A320
            ['aircraft_id' => 2, 'aircraft_class_id' => 2, 'seat_count' => 20],  // Business seats on Airbus A320
        ]);
    }
}
