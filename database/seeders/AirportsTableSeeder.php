<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AirportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         DB::table('airports')->insert([
            ['code' => 'JFK', 'name' => 'John F. Kennedy International Airport', 'city' => 'New York', 'country' => 'USA'],
            ['code' => 'LHR', 'name' => 'London Heathrow Airport', 'city' => 'London', 'country' => 'UK'],
            ['code' => 'DEL', 'name' => 'Indira Gandhi International Airport', 'city' => 'Delhi', 'country' => 'India'],
        ]);
    }
}
