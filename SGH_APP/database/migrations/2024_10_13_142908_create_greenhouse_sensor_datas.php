<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('greenhouse_sensor_datas', function (Blueprint $table) {
            $table->id();
            $table->float('suhu_avg', 10, 2);
            $table->float('suhu_1', 10, 2);
            $table->float('suhu_2', 10, 2);
            $table->float('suhu_3', 10, 2);
            $table->float('suhu_4', 10, 2);
            $table->float('suhu_5', 10, 2);
            $table->float('suhu_6', 10, 2);
            $table->float('suhu_7', 10, 2);
            $table->integer('kelembaban_avg');
            $table->integer('kelembaban_1');
            $table->integer('kelembaban_2');
            $table->integer('kelembaban_3');
            $table->integer('kelembaban_4');
            $table->integer('kelembaban_5');
            $table->integer('kelembaban_6');
            $table->integer('kelembaban_7');
            $table->integer('co2');
            $table->integer('intensitas');
            // $table->integer('water_level');
            $table->float('panel_temp',10,2);
            $table->integer('device_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('greenhouse_sensor_datas');
    }
};
