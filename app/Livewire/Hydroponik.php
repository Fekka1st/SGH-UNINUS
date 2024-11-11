<?php

namespace App\Livewire;

use App\Models\Control;
use App\Models\device;
use App\Models\SensorDataSmartHydroponik;
use App\Models\device_settings;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Http;

class Hydroponik extends Component
{
    public $data;
    public $control;
    public $setting;
    public $device;
    public $status;
    public $lastSeen;

    public $pump_ph_up_status;
    public $pump_ph_down_status;
    public $ab_mix_status;
    public $water_level_status;
    public $Limit_ph_min, $Limit_ph_max, $Limit_nutrisi_min, $Limit_nutrisi_max, $tangki_air;

    public function mount()
    {
        $this->refreshData();
        $this->pump();
        $this->loadSetting();
        $this->lastseen();
    }

    public function loadSetting()
    {
        $this->setting = device_settings::where('device_id', 1)->pluck('setting_value', 'setting_name');
        $this->Limit_ph_min = $this->setting['Limit_ph_min'] ?? null;
        $this->Limit_ph_max = $this->setting['Limit_ph_max'] ?? null;
        $this->Limit_nutrisi_min = $this->setting['Limit_nutrisi_min'] ?? null;
        $this->Limit_nutrisi_max = $this->setting['Limit_nutrisi_max'] ?? null;
        $this->tangki_air = $this->setting['tangki_air'] ?? null;
    }

    public function lastseen(){
        $device = device::find(1);
        if ($device->status === 1) {
            $this->status = 1;
            $this->lastSeen = null;
        } else {
            $this->status = 0;
            $diffInMinutes = Carbon::now()->diffInMinutes($device->updated_at);

            if ($diffInMinutes < 1) {
                // Jika perbedaan kurang dari 1 menit
                $this->lastSeen = 'now';
            } else {
                // Jika lebih dari 1 menit, tampilkan perbedaan waktu
                $this->lastSeen = Carbon::parse($device->updated_at)->diffForHumans();
            }
        }
    }

    public function openModal()
{
    $this->dispatch('openModal');
}

public function closeModal()
{
    $this->dispatch('closeModal');
}


    public function refreshData()
    {
        $this->lastseen();
        $this->device = device::find(1);
        $this->data = SensorDataSmartHydroponik::latest('created_at')->first();
        $this->control = Control::where('device_id', 1)->get();

        if (!$this->data) {
            session()->flash('error', 'Data sensor tidak ditemukan');
            return;
        }

        // Dispatch event to JavaScript for real-time updates
        if ($this->device->status === 1) {
            $this->dispatch('updateSensorData', [
                'suhu_air' => $this->data->suhu_air,
                'laju_air' => $this->data->laju_air,
                'ph_air' => $this->data->ph_air,
                'tds' => $this->data->tds,
                'volume_air' => $this->data->volume_air
            ]);
        }
    }

    public function pump()
    {
        $this->pump_ph_up_status = Control::where('device_id', 1)->where('control_type', 'Pompa_PHUP')->value('status') ?? 0;
        $this->pump_ph_down_status = Control::where('device_id', 1)->where('control_type', 'Pompa_PHDOWN')->value('status') ?? 0;
        $this->ab_mix_status = Control::where('device_id', 1)->where('control_type', 'Pompa_Nutrisi')->value('status') ?? 0;
        $this->water_level_status = Control::where('device_id', 1)->where('control_type', 'Pompa_TankiAir')->value('status') ?? 0;
    }

    public function togglePump($pump)
    {
        $control = Control::where('device_id', 1)->where('control_type', $pump)->first();

        if ($control) {
            $control->status = $control->status == 1 ? 0 : 1;
            $notif = $control->status == 1 ? 'On' : 'Off';
            $control->save();

            $response = Http::post('http://127.0.0.1:1880/api/control/device', [
                'pump' => $pump,
                'validation' => 'send',
                'status' => $control->status,
                'device_id' => 1
            ]);

            if ($response->successful()) {
                session()->flash('success', "Pompa $pump sekarang $notif dan trigger berhasil dikirim ke Node-RED.");
            } else {
                session()->flash('error', "Pompa $pump $notif, namun gagal mengirim trigger ke Node-RED.");
            }
        } else {
            session()->flash('error', 'Control tidak ditemukan.');
        }
    }

    public function update()
    {
        $validated = $this->validate([
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

        session()->flash('success', 'Setting Berhasil diupdate');
    }

    public function render()
    {
        return view('livewire.hydroponik');
    }
}
