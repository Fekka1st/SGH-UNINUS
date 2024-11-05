<?php

namespace App\Http\Controllers;

use App\Models\control;
use App\Models\device;
use App\Models\device_settings;
use App\Models\SensorDataSmartHydroponik;
use Illuminate\Http\Request;

class hydroponikcontroller extends Controller
{
    //
    public function index(){
        $device = device::where('id',1)->first();
        $data = SensorDataSmartHydroponik::latest()->first();
        $control = control::where('device_id',1)->get();
        $setting = device_settings::where('device_id', 1)->pluck('setting_value', 'setting_name');
        // dd($device->mode);
        return view('hydroponik.index',compact('data','control','setting','device'));
    }

    public function control(Request $request){
        $data = SensorDataSmartHydroponik::get()->first();

        return back();
    }
    public function changeMode(Request $request, $id)
    {
        // Cari device berdasarkan ID yang diberikan
        $device = Device::find($id);

        if ($device) {
            // Toggle mode: jika mode 1 (Auto), ubah ke 0 (Manual), dan sebaliknya
            $device->mode = $device->mode == 1 ? 0 : 1;
            $notif = $device->mode == 1 ? 'Auto' : 'Manual';
            $device->save();
        }

        toast('Mode Pompa '.$notif, 'success');
        return redirect()->back();
    }


}
