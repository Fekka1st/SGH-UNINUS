<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('users')->insert([
            'name' => 'UNINUS UNGGUL',
            'email' => 'UNINUS@gmail.com',
            'password' => Hash::make('3tcXBRfUIkJvwut'),
            'foto_profile' => '/asset/img/kucing.jpg',
        ]);

        $this->call([
            controls::class,
            device_settings::class,
            devices::class,
            extend_devices::class,
            greenhouse::class,
            first_setup::class
        ]);

    }
}
