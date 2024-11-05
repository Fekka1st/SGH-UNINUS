<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class devices extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('devices')->insert([
            // Data Control Hydroponik : 1
            [
                'name' => 'Smart Hydroponik',
                'location' => 'Bandung',
                'mode' => 0,
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Smart Aeroponik',
                'location' => 'Bandung',
                'mode' => 0,
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],[
                'name' => 'Smart GreenHouse',
                'location' => 'Bandung',
                'mode' => 0,
                'status' => 0,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
