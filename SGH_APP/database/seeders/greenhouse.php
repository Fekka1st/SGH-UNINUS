<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class greenhouse extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create(); // Inisialisasi Faker
        $data = [];

        for ($i = 0; $i < 50; $i++) {
            $data[] = [
                'suhu_avg' => $faker->randomFloat(1, 24, 30), // Random float between 24.0 and 30.0
                'kelembaban_avg' => $faker->numberBetween(50, 70), // Random float between 50.0 and 70.0
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
                'co2' => $faker->numberBetween(350, 450), // Random int between 350 and 450
                'intensitas' => $faker->numberBetween(700, 900), // Random int between 700 and 900
                'panel_temp' => $faker->randomFloat(1, 28, 35), // Random float between 28.0 and 35.0
                'device_id' => 3,
                'created_at' => now()->subHours(10 - $i), // Each record is 1 hour apart
                'updated_at' => now()->subHours(10 - $i),
            ];
        }

        DB::table('greenhouse_sensor_datas')->insert($data);
    }

}
