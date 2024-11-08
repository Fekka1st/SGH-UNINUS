<?php

namespace Database\Seeders;

use App\Models\device_settings as ModelsDevice_settings;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class device_settings extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            ['setting_name' => 'Limit_ph_min', 'setting_value' => '5.5', 'device_id' => 1],
            ['setting_name' => 'Limit_ph_max', 'setting_value' => '7.5', 'device_id' => 1],
            ['setting_name' => 'Limit_nutrisi_min', 'setting_value' => '500', 'device_id' => 1],
            ['setting_name' => 'Limit_nutrisi_max', 'setting_value' => '1000', 'device_id' => 1],
            ['setting_name' => 'tangki_air', 'setting_value' => '10', 'device_id' => 1],
            ['setting_name' => 'Limit_ph_min', 'setting_value' => '5.5', 'device_id' => 2],
            ['setting_name' => 'Limit_ph_max', 'setting_value' => '7.5', 'device_id' => 2],
            ['setting_name' => 'Limit_nutrisi_min', 'setting_value' => '500', 'device_id' => 2],
            ['setting_name' => 'Limit_nutrisi_max', 'setting_value' => '1000', 'device_id' => 2],
            ['setting_name' => 'tangki_air', 'setting_value' => '10', 'device_id' => 2],
            ['setting_name' => 'waktu_spary_start', 'setting_value' => '15', 'device_id' => 2],
            ['setting_name' => 'waktu_spary_end', 'setting_value' => '5', 'device_id' => 2],
            ['setting_name' => 'Cooling_Sistem_Active', 'setting_value' => '32', 'device_id' => 3],
            ['setting_name' => 'Cooling_Sistem_Inactive', 'setting_value' => '40', 'device_id' => 3],
        ];

        foreach ($settings as $setting) {
            ModelsDevice_settings::create($setting);
        }
    }
}
