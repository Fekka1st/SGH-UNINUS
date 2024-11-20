<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class extend_devices extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];
        for ($i = 0; $i < 50; $i++) {
            $data[] = [
                'name_device' => 'water_level',
                'value' => mt_rand(450, 600) / 10,
                'status' => 1,
                'device_id' => 3,
                'created_at' => now()->subHours(10 - $i),
                'updated_at' => now()->subHours(10 - $i),
            ];
        }

        DB::table('extend_devices')->insert($data);
    }
}
