<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\device;
class SensorDataSmartGreenhouse extends Model
{
    use HasFactory;

    protected $table = 'greenhouse_sensor_datas';

    protected $fillable = [
        'suhu', 'kelembaban', 'co2', 'intensitas', 'konsumsi_air', 'timestamp', 'device_id'
    ];


    public function device()
    {
        return $this->belongsTo(device::class, 'device_id');
    }
}
