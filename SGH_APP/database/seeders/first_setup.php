<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class first_setup extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("greenhouse_sensor_datas")->insert([
            "suhu_avg" => 0,
            "kelembaban_avg" => 0,
            "suhu_1" => 0,
            "suhu_2" => 0,
            "suhu_3" => 0,
            "suhu_4" => 0,
            "suhu_5" => 0,
            "suhu_6" => 0,
            "suhu_7" => 0,
            "kelembaban_1" => 0,
            "kelembaban_2" => 0,
            "kelembaban_3" => 0,
            "kelembaban_4" => 0,
            "kelembaban_5" => 0,
            "kelembaban_6" => 0,
            "kelembaban_7" => 0,
            "co2" => 0,
            "intensitas" => 0,
            "water_level" => 0,
            "panel_temp" => 0,
            "device_id" => 3,
            "created_at" => now(),
            "updated_at" => now(),
        ]);
        DB::table('aeroponik_sensor_datas')->insert([
            'ph_air' => 0,
            'tds' => 0,
            'volume_air' => 0,
            'suhu_air' => 0,
            'kelembaban_udara' => 0,
            'panel_temp' => 0,
            'device_id' => 2,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        DB::table('hydroponik_sensor_datas')->insert([
            'ph_air' => 0,
            'tds' => 0,
            'laju_air' => 0,
            'volume_air' => 0,
            'suhu_air' => 0,
            'panel_temp' => 0,
            'device_id' => 1,
            'created_at' => now(),  // Substract days
            'updated_at' =>  now(),
        ]);

        DB::table('extend_devices')->insert([
           'name_device' => 'water_level',
            'value' => 0,
            'status' => 0,
            'device_id' => 3,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
