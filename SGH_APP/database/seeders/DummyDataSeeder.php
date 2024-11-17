<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;
use Carbon\Carbon;

class DummyDataSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create();
        $currentTimestamp = Carbon::now();

         for ($i = 0; $i < 20; $i++) {
            DB::table('greenhouse_sensor_datas')->insert([
                'suhu_avg' => $faker->numberBetween(20, 40),
                'kelembaban_avg' => $faker->numberBetween(30, 80),
                'suhu_1' => $faker->numberBetween(20, 40),
                'suhu_2' => $faker->numberBetween(20, 40),
                'suhu_3' => $faker->numberBetween(20, 40),
                'suhu_4' => $faker->numberBetween(20, 40),
                'suhu_5' => $faker->numberBetween(20, 40),
                'suhu_6' => $faker->numberBetween(20, 40),
                'suhu_7' => $faker->numberBetween(20, 40),
                'kelembaban_1' => $faker->numberBetween(30, 80),
                'kelembaban_2' => $faker->numberBetween(30, 80),
                'kelembaban_3' => $faker->numberBetween(30, 80),
                'kelembaban_4' => $faker->numberBetween(30, 80),
                'kelembaban_5' => $faker->numberBetween(30, 80),
                'kelembaban_6' => $faker->numberBetween(30, 80),
                'kelembaban_7' => $faker->numberBetween(30, 80),
                'co2' => $faker->numberBetween(300, 800),
                'intensitas' => $faker->numberBetween(100, 1000),
                'water_level' => $faker->numberBetween(50, 200),
                'panel_temp' => $faker->numberBetween(10, 50),
                'device_id' => 3,
                'created_at' => $currentTimestamp->copy()->subHours($i),  // Substract hours
                'updated_at' => $currentTimestamp->copy()->subHours($i),
            ]);
        }

        // Membuat 20 data dummy per hari
        for ($i = 0; $i < 20; $i++) {
            DB::table('greenhouse_sensor_datas')->insert([
                'suhu_avg' => $faker->numberBetween(20, 40),
                'kelembaban_avg' => $faker->numberBetween(30, 80),
                'suhu_1' => $faker->numberBetween(20, 40),
                'suhu_2' => $faker->numberBetween(20, 40),
                'suhu_3' => $faker->numberBetween(20, 40),
                'suhu_4' => $faker->numberBetween(20, 40),
                'suhu_5' => $faker->numberBetween(20, 40),
                'suhu_6' => $faker->numberBetween(20, 40),
                'suhu_7' => $faker->numberBetween(20, 40),
                'kelembaban_1' => $faker->numberBetween(30, 80),
                'kelembaban_2' => $faker->numberBetween(30, 80),
                'kelembaban_3' => $faker->numberBetween(30, 80),
                'kelembaban_4' => $faker->numberBetween(30, 80),
                'kelembaban_5' => $faker->numberBetween(30, 80),
                'kelembaban_6' => $faker->numberBetween(30, 80),
                'kelembaban_7' => $faker->numberBetween(30, 80),
                'co2' => $faker->numberBetween(300, 800),
                'intensitas' => $faker->numberBetween(100, 1000),
                'water_level' => $faker->numberBetween(50, 200),
                'panel_temp' => $faker->numberBetween(10, 50),
                'device_id' => 3,
                'created_at' => $currentTimestamp->copy()->subDays($i),  // Substract days
                'updated_at' => $currentTimestamp->copy()->subDays($i),
            ]);
        }

        // Membuat 20 data dummy per minggu
        for ($i = 0; $i < 20; $i++) {
            DB::table('greenhouse_sensor_datas')->insert([
                'suhu_avg' => $faker->numberBetween(20, 40),
                'kelembaban_avg' => $faker->numberBetween(30, 80),
                'suhu_1' => $faker->numberBetween(20, 40),
                'suhu_2' => $faker->numberBetween(20, 40),
                'suhu_3' => $faker->numberBetween(20, 40),
                'suhu_4' => $faker->numberBetween(20, 40),
                'suhu_5' => $faker->numberBetween(20, 40),
                'suhu_6' => $faker->numberBetween(20, 40),
                'suhu_7' => $faker->numberBetween(20, 40),
                'kelembaban_1' => $faker->numberBetween(30, 80),
                'kelembaban_2' => $faker->numberBetween(30, 80),
                'kelembaban_3' => $faker->numberBetween(30, 80),
                'kelembaban_4' => $faker->numberBetween(30, 80),
                'kelembaban_5' => $faker->numberBetween(30, 80),
                'kelembaban_6' => $faker->numberBetween(30, 80),
                'kelembaban_7' => $faker->numberBetween(30, 80),
                'co2' => $faker->numberBetween(300, 800),
                'intensitas' => $faker->numberBetween(100, 1000),
                'water_level' => $faker->numberBetween(50, 200),
                'panel_temp' => $faker->numberBetween(10, 50),
                'device_id' => 3,
                'created_at' => $currentTimestamp->copy()->subWeeks($i),  // Substract weeks
                'updated_at' => $currentTimestamp->copy()->subWeeks($i),
            ]);
        }

        // Membuat 20 data dummy per bulan
        for ($i = 0; $i < 20; $i++) {
            DB::table('greenhouse_sensor_datas')->insert([
                'suhu_avg' => $faker->numberBetween(20, 40),
                'kelembaban_avg' => $faker->numberBetween(30, 80),
                'suhu_1' => $faker->numberBetween(20, 40),
                'suhu_2' => $faker->numberBetween(20, 40),
                'suhu_3' => $faker->numberBetween(20, 40),
                'suhu_4' => $faker->numberBetween(20, 40),
                'suhu_5' => $faker->numberBetween(20, 40),
                'suhu_6' => $faker->numberBetween(20, 40),
                'suhu_7' => $faker->numberBetween(20, 40),
                'kelembaban_1' => $faker->numberBetween(30, 80),
                'kelembaban_2' => $faker->numberBetween(30, 80),
                'kelembaban_3' => $faker->numberBetween(30, 80),
                'kelembaban_4' => $faker->numberBetween(30, 80),
                'kelembaban_5' => $faker->numberBetween(30, 80),
                'kelembaban_6' => $faker->numberBetween(30, 80),
                'kelembaban_7' => $faker->numberBetween(30, 80),
                'co2' => $faker->numberBetween(300, 800),
                'intensitas' => $faker->numberBetween(100, 1000),
                'water_level' => $faker->numberBetween(50, 200),
                'panel_temp' => $faker->numberBetween(10, 50),
                'device_id' => 3,
                'created_at' => $currentTimestamp->copy()->subMonths($i),  // Substract months
                'updated_at' => $currentTimestamp->copy()->subMonths($i),
            ]);
        }

        // Membuat 20 data dummy per 6 bulan
        for ($i = 0; $i < 20; $i++) {
            DB::table('greenhouse_sensor_datas')->insert([
                'suhu_avg' => $faker->numberBetween(20, 40),
                'kelembaban_avg' => $faker->numberBetween(30, 80),
                'suhu_1' => $faker->numberBetween(20, 40),
                'suhu_2' => $faker->numberBetween(20, 40),
                'suhu_3' => $faker->numberBetween(20, 40),
                'suhu_4' => $faker->numberBetween(20, 40),
                'suhu_5' => $faker->numberBetween(20, 40),
                'suhu_6' => $faker->numberBetween(20, 40),
                'suhu_7' => $faker->numberBetween(20, 40),
                'kelembaban_1' => $faker->numberBetween(30, 80),
                'kelembaban_2' => $faker->numberBetween(30, 80),
                'kelembaban_3' => $faker->numberBetween(30, 80),
                'kelembaban_4' => $faker->numberBetween(30, 80),
                'kelembaban_5' => $faker->numberBetween(30, 80),
                'kelembaban_6' => $faker->numberBetween(30, 80),
                'kelembaban_7' => $faker->numberBetween(30, 80),
                'co2' => $faker->numberBetween(300, 800),
                'intensitas' => $faker->numberBetween(100, 1000),
                'water_level' => $faker->numberBetween(50, 200),
                'panel_temp' => $faker->numberBetween(10, 50),
                'device_id' => 3,
                'created_at' => $currentTimestamp->copy()->subMonths($i * 6),  // Substract every 6 months
                'updated_at' => $currentTimestamp->copy()->subMonths($i * 6),
            ]);
        }


        for ($i = 0; $i < 20; $i++) {
            DB::table('aeroponik_sensor_datas')->insert([
                'ph_air' => $faker->numberBetween(20, 40),
                'tds' => $faker->numberBetween(30, 80),
                'volume_air' => $faker->numberBetween(300, 800),
                'suhu_air' => $faker->numberBetween(100, 1000),
                'kelembaban_udara' => $faker->numberBetween(50, 200),
                'panel_temp' => $faker->numberBetween(10, 50),
                'device_id' => 3,
                'created_at' => $currentTimestamp->copy()->subHours($i),  // Substract hours
                'updated_at' => $currentTimestamp->copy()->subHours($i),
            ]);
        }

        // Membuat 20 data dummy per hari
        for ($i = 0; $i < 20; $i++) {
            DB::table('aeroponik_sensor_datas')->insert([
                'ph_air' => $faker->numberBetween(20, 40),
                'tds' => $faker->numberBetween(30, 80),
                'volume_air' => $faker->numberBetween(300, 800),
                'suhu_air' => $faker->numberBetween(100, 1000),
                'kelembaban_udara' => $faker->numberBetween(50, 200),
                'panel_temp' => $faker->numberBetween(10, 50),
                'device_id' => 3,
                'created_at' => $currentTimestamp->copy()->subDays($i),  // Substract days
                'updated_at' => $currentTimestamp->copy()->subDays($i),
            ]);
        }

        // Membuat 20 data dummy per minggu
        for ($i = 0; $i < 20; $i++) {
            DB::table('aeroponik_sensor_datas')->insert([
                'ph_air' => $faker->numberBetween(20, 40),
                'tds' => $faker->numberBetween(30, 80),
                'volume_air' => $faker->numberBetween(300, 800),
                'suhu_air' => $faker->numberBetween(100, 1000),
                'kelembaban_udara' => $faker->numberBetween(50, 200),
                'panel_temp' => $faker->numberBetween(10, 50),
                'device_id' => 3,
                'created_at' => $currentTimestamp->copy()->subWeeks($i),  // Substract weeks
                'updated_at' => $currentTimestamp->copy()->subWeeks($i),
            ]);
        }

        // Membuat 20 data dummy per bulan
        for ($i = 0; $i < 20; $i++) {
            DB::table('aeroponik_sensor_datas')->insert([
                'ph_air' => $faker->numberBetween(20, 40),
                'tds' => $faker->numberBetween(30, 80),
                'volume_air' => $faker->numberBetween(300, 800),
                'suhu_air' => $faker->numberBetween(100, 1000),
                'kelembaban_udara' => $faker->numberBetween(50, 200),
                'panel_temp' => $faker->numberBetween(10, 50),
                'device_id' => 3,
                'created_at' => $currentTimestamp->copy()->subMonths($i),  // Substract months
                'updated_at' => $currentTimestamp->copy()->subMonths($i),
            ]);
        }

        // Membuat 20 data dummy per 6 bulan
        for ($i = 0; $i < 20; $i++) {
            DB::table('aeroponik_sensor_datas')->insert([
                'ph_air' => $faker->numberBetween(20, 40),
                'tds' => $faker->numberBetween(30, 80),
                'volume_air' => $faker->numberBetween(300, 800),
                'suhu_air' => $faker->numberBetween(100, 1000),
                'kelembaban_udara' => $faker->numberBetween(50, 200),
                'panel_temp' => $faker->numberBetween(10, 50),
                'device_id' => 2,
                'created_at' => $currentTimestamp->copy()->subMonths($i * 6),  // Substract every 6 months
                'updated_at' => $currentTimestamp->copy()->subMonths($i * 6),
            ]);
        }

        for ($i = 0; $i < 20; $i++) {
            DB::table('hydroponik_sensor_datas')->insert([
                'ph_air' => $faker->numberBetween(20, 40),
                'tds' => $faker->numberBetween(30, 80),
                'laju_air' => $faker->numberBetween(300, 800),
                'volume_air' => $faker->numberBetween(100, 1000),
                'suhu_air' => $faker->numberBetween(50, 200),
                'panel_temp' => $faker->numberBetween(10, 50),
                'device_id' => 1,
                'created_at' => $currentTimestamp->copy()->subHours($i),  // Substract hours
                'updated_at' => $currentTimestamp->copy()->subHours($i),
            ]);
        }

        // Membuat 20 data dummy per hari
        for ($i = 0; $i < 20; $i++) {
            DB::table('hydroponik_sensor_datas')->insert([
                'ph_air' => $faker->numberBetween(20, 40),
                'tds' => $faker->numberBetween(30, 80),
                'laju_air' => $faker->numberBetween(300, 800),
                'volume_air' => $faker->numberBetween(100, 1000),
                'suhu_air' => $faker->numberBetween(50, 200),
                'panel_temp' => $faker->numberBetween(10, 50),
                'device_id' => 1,
                'created_at' => $currentTimestamp->copy()->subDays($i),  // Substract days
                'updated_at' => $currentTimestamp->copy()->subDays($i),
            ]);
        }

        // Membuat 20 data dummy per minggu
        for ($i = 0; $i < 20; $i++) {
            DB::table('hydroponik_sensor_datas')->insert([
                'ph_air' => $faker->numberBetween(20, 40),
                'tds' => $faker->numberBetween(30, 80),
                'laju_air' => $faker->numberBetween(300, 800),
                'volume_air' => $faker->numberBetween(100, 1000),
                'suhu_air' => $faker->numberBetween(50, 200),
                'panel_temp' => $faker->numberBetween(10, 50),
                'device_id' => 1,
                'created_at' => $currentTimestamp->copy()->subWeeks($i),  // Substract weeks
                'updated_at' => $currentTimestamp->copy()->subWeeks($i),
            ]);
        }

        // Membuat 20 data dummy per bulan
        for ($i = 0; $i < 20; $i++) {
            DB::table('hydroponik_sensor_datas')->insert([
                'ph_air' => $faker->numberBetween(20, 40),
                'tds' => $faker->numberBetween(30, 80),
                'laju_air' => $faker->numberBetween(300, 800),
                'volume_air' => $faker->numberBetween(100, 1000),
                'suhu_air' => $faker->numberBetween(50, 200),
                'panel_temp' => $faker->numberBetween(10, 50),
                'device_id' => 1,
                'created_at' => $currentTimestamp->copy()->subMonths($i),  // Substract months
                'updated_at' => $currentTimestamp->copy()->subMonths($i),
            ]);
        }

        // Membuat 20 data dummy per 6 bulan
        for ($i = 0; $i < 20; $i++) {
            DB::table('hydroponik_sensor_datas')->insert([
                'ph_air' => $faker->numberBetween(20, 40),
                'tds' => $faker->numberBetween(30, 80),
                'laju_air' => $faker->numberBetween(300, 800),
                'volume_air' => $faker->numberBetween(100, 1000),
                'suhu_air' => $faker->numberBetween(50, 200),
                'panel_temp' => $faker->numberBetween(10, 50),
                'device_id' => 1,
                'created_at' => $currentTimestamp->copy()->subMonths($i * 6),  // Substract every 6 months
                'updated_at' => $currentTimestamp->copy()->subMonths($i * 6),
            ]);
        }
        $data = [];
        for ($i = 0; $i < 20; $i++) {
            $data[] = [
                'name_device' => 'water_level',
                'value' => mt_rand(100, 1000) / 10, // Random float between 10.0 and 100.0
                'status' => 1,
                'device_id' => 3,
                'created_at' => now()->subDays(rand(0, 30)), // Random timestamp in the last 30 days
                'updated_at' => now(),
            ];
        }

        // Insert data into the table
        DB::table('extend_devices')->insert($data);
    }
}
