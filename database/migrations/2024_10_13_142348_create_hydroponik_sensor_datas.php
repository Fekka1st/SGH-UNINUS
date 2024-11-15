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
            $table->float('ph_air', 10, 2);
            $table->integer('tds');
            $table->float('laju_air', 10, 2);
            $table->integer('volume_air');
            $table->float('suhu_air', 10, 2);
            $table->float('panel_temp', 10, 2);
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
