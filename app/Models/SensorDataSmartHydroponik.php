<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\device;
class SensorDataSmartHydroponik extends Model
{
    use HasFactory;
    protected $table = 'hydroponik_sensor_datas';

    protected $fillable = [
        'air_ph', 'tds', 'laju_air', 'volume_air', 'suhu_air', 'timestamp', 'device_id'
    ];

    public function device()
    {
        return $this->belongsTo(device::class, 'device_id');
    }
}
