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
        Schema::create('aeroponik_sensor_datas', function (Blueprint $table) {
            $table->id();
            $table->integer('ph_air');
            $table->integer('tds');
            $table->integer('volume_air');
            $table->integer('suhu_air');
            $table->integer('kelembaban_udara');
            $table->integer('device_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aeroponik_sensor_datas');
    }
};
