<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\device;

class control extends Model
{
    use HasFactory;
    protected $table = 'controls';

    protected $fillable = [
        'control_type', 'status', 'device_id'
    ];

    public function device()
    {
        return $this->belongsTo(device::class, 'device_id');
    }
}
