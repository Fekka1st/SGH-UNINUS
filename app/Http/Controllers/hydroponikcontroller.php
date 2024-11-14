<?php

namespace App\Http\Controllers;

use App\Models\control;
use App\Models\device;
use App\Models\device_settings;
use App\Models\SensorDataSmartHydroponik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class hydroponikcontroller extends Controller
{
    //
    public function index(){
        $device = device::where('id',1)->first();
        $data = SensorDataSmartHydroponik::latest()->first();
        $control = control::where('device_id',1)->get();
        $setting = device_settings::where('device_id', 1)->pluck('setting_value', 'setting_name');
        return view('hydroponik.index',compact('data','control','setting','device'));
    }

    public function control(Request $request){
        $data = SensorDataSmartHydroponik::get()->first();

        return back();
    }
    public function changeMode(Request $request, $id)
    {
        $device = Device::find($id);
        if ($device) {
            $device->mode = $device->mode == 1 ? 0 : 1;
            $notif = $device->mode == 1 ? 'Auto' : 'Manual';
            $device->save();
        }
    }

    public function update(Request $request){
    try {
        $validated = $request->validate([
            'Limit_ph_min' => 'required|numeric',
            'Limit_ph_max' => 'required|numeric',
            'Limit_nutrisi_min' => 'required|numeric',
            'Limit_nutrisi_max' => 'required|numeric',
            'tangki_air' => 'required|numeric',
        ]);

        $deviceId = 1;
        $settings = device_settings::where('device_id', $deviceId)->get();

        foreach ($settings as $setting) {
            if (array_key_exists($setting->setting_name, $validated)) {
                $setting->setting_value = $validated[$setting->setting_name];
                $setting->save();
            }
        }
        toast('Setting Berhasil diupdate','success');
        return redirect()->back();
    } catch (\Illuminate\Validation\ValidationException $e) {
        toast('Please correct the errors and try again.','error');
        return redirect()->back()->withErrors($e->validator)->withInput();
    } catch (\Exception $e) {
        toast('An unexpected error occurred. Please try again later.','error');
        return redirect()->back();
    }
}



}
