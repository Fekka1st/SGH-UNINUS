<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class extend_device extends Model
{
    //
    protected $table = 'extend_devices';
    protected $fillable = [
        'name_device','value','status','timestamp', 'device_id'
    ];
}
