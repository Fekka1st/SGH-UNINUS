<?php

namespace App\Http\Controllers;

use App\Models\device;
use App\Models\device_settings;
use Illuminate\Http\Request;

class aerophonicontroller extends Controller
{
    //
    public function index(){
        return view('aerophonik.index');
    }

    public function changeMode(Request $request, $id)
    {
        $device = device::find($id);
        if ($device) {
            $device->mode = $device->mode == 1 ? 0 : 1;
            $notif = $device->mode == 1 ? 'Auto' : 'Manual';
            $device->save();
        }

        toast('Mode Pompa '.$notif, 'success');
        return redirect()->back();
    }

    public function update(Request $request)
    {
    try {

        $validated = $request->validate([
            'Limit_ph_min' => 'required|numeric',
            'Limit_ph_max' => 'required|numeric',
            'Limit_nutrisi_min' => 'required|numeric',
            'Limit_nutrisi_max' => 'required|numeric',
            'tangki_air' => 'required|numeric',
            'spray_start' => 'required|numeric',
            'spray_end' => 'required|numeric'
        ]);
      
        $deviceId = 2;
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
