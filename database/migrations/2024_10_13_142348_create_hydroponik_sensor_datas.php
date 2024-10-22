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
        Schema::create('hydroponik_sensor_datas', function (Blueprint $table) {
            $table->id();
            $table->integer('ph_air');
            $table->integer('tds');
            $table->integer('laju_air');
            $table->integer('volume_air');
            $table->integer('suhu_air');
            $table->integer('device_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hydroponik_sensor_datas');
    }
};
