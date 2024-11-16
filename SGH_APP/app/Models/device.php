<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\control;
use App\Models\device_settings;
use App\Models\SensorDataSmartAeroponik;
use App\Models\SensorDataSmartGreenhouse;
use App\Models\SensorDataSmartHydroponik;

class device extends Model
{
    use HasFactory;

    protected $table = 'devices';

    protected $fillable = [
        'name', 'location', 'status', 'mode', 'timestamp'
    ];

    public function controls()
    {
        return $this->hasMany(control::class, 'device_id');
    }

    public function settings()
    {
        return $this->hasMany(device_settings::class, 'device_id');
    }

    public function hydroponicsData()
    {
        return $this->hasMany(SensorDataSmartHydroponik::class, 'device_id');
    }

    public function aeroponicsData()
    {
        return $this->hasMany(SensorDataSmartAeroponik::class, 'device_id');
    }


    public function greenhouseData()
    {
        return $this->hasMany(SensorDataSmartGreenhouse::class, 'device_id');
    }

}
