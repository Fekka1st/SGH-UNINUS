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
            $table->float('suhu');
            $table->integer('kelembaban');
            $table->float('co2');
            $table->integer('intensitas');
            $table->integer('konsumsi_air');
            $table->float('room_temp');
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
