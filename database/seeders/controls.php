<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class controls extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('controls')->insert([
            // Data Control Hydroponik : 1
            [
                'control_type' => 'Pompa_Nutrisi',
                'status' => 0,
                'device_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'control_type' => 'Pompa_PHUP',
                'status' => 0,
                'device_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'control_type' => 'Pompa_PHDOWN',
                'status' => 0,
                'device_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'control_type' => 'Pompa_TankiAir',
                'status' => 0,
                'device_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Data control aeroponik : 2
            [
                'control_type' => 'Pompa_A',
                'status' => 0,
                'device_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'control_type' => 'Pompa_B',
                'status' => 0,
                'device_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'control_type' => 'Pompa_PHUP',
                'status' => 0,
                'device_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'control_type' => 'Pompa_PHDOWN',
                'status' => 0,
                'device_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'control_type' => 'Pompa_TankiAir',
                'status' => 0,
                'device_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'control_type' => 'Pompa_Spraying',
                'status' => 0,
                'device_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Data control GreenHouse : 3
            [
                'control_type' => 'Cooling_System',
                'status' => 0,
                'device_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
