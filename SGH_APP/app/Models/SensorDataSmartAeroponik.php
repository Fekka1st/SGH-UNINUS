<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\device;
class SensorDataSmartAeroponik extends Model
{
    use HasFactory;
    protected $table = 'aeroponik_sensor_datas';

    protected $fillable = [
        'air_ph', 'tds', 'kelembaban_udara', 'volume_air', 'suhu_air', 'timestamp', 'device_id'
    ];

    // Each sensor data belongs to one device
    public function device()
    {
        return $this->belongsTo(device::class, 'device_id');
    }
}
