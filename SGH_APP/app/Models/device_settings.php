<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\device;

class device_settings extends Model
{
    use HasFactory;

    protected $table = 'device_settings';

    protected $fillable = [
        'setting_name', 'setting_value', 'device_id'
    ];

    public function device()
    {
        return $this->belongsTo(device::class, 'device_id');
    }
}
