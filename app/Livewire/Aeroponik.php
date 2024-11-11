<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Control;
use App\Models\device;
use App\Models\device_settings;
use App\Models\SensorDataSmartAeroponik;
use Carbon\Carbon;
use Illuminate\Support\Facades\Http;
class Aeroponik extends Component
{

    public $data;
    public $control;
    public $setting;
    public $device;
    public $status;
    public $lastSeen;

    // control
    public $pump_ph_up_status;
    public $pump_ph_down_status;
    public $ab_mix_status;
    public $water_level_status;
    public $spraying_status;
    public $spray_start,$spray_end,$Limit_ph_min, $Limit_ph_max, $Limit_nutrisi_min, $Limit_nutrisi_max, $tangki_air;

    public function mount(){
        $this->loadSetting();
        $this->refreshData();
        $this->lastseen();
    }
    public function loadSetting()
    {
        $this->setting = device_settings::where('device_id', 2)->pluck('setting_value', 'setting_name');
        $this->Limit_ph_min = $this->setting['Limit_ph_min'] ?? null;
        $this->Limit_ph_max = $this->setting['Limit_ph_max'] ?? null;
        $this->Limit_nutrisi_min = $this->setting['Limit_nutrisi_min'] ?? null;
        $this->Limit_nutrisi_max = $this->setting['Limit_nutrisi_max'] ?? null;
        $this->tangki_air = $this->setting['tangki_air'] ?? null;
        $this->spray_start = $this->setting['waktu_spary_start'] ?? null;
        $this->spray_end = $this->setting['waktu_spary_end']?? null;
    }

    public function openModal()
    {
        $this->dispatch('openModal');
    }

    public function closeModal()
    {
        $this->dispatch('closeModal');
    }

    public function lastseen(){
        $device = device::find(2);
        if ($device->status === 1) {
            $this->status = 1;
            $this->lastSeen = 'online';
        } else {
            $this->status = 0;
            $this->lastSeen = Carbon::parse($device->updated_at)->diffForHumans();
        }
    }

    public function refreshData(){
        $this->lastseen();
        $this->device = device::find(2);
        $this->data = SensorDataSmartAeroponik::latest('created_at')->first();
        $this->control = Control::where('device_id', 1)->get();
        if (!$this->data) {
            session()->flash('error', 'Data sensor tidak ditemukan');
            return;
        }
        if ($this->device->status === 1) {
            $this->dispatch('updateSensorData', [
                'suhu_air' => $this->data->suhu_air,
                'kelembaban_udara' => $this->data->kelembaban_udara,
                'ph_air' => $this->data->ph_air,
                'tds' => $this->data->tds,
                'volume_air' => $this->data->volume_air
            ]);
        }
    }

    public function pump()
    {
        $device =2;
        $this->pump_ph_up_status = Control::where('device_id', $device)->where('control_type', 'Pompa_PHUP')->value('status') ?? 0;
        $this->pump_ph_down_status = Control::where('device_id', $device)->where('control_type', 'Pompa_PHDOWN')->value('status') ?? 0;
        $this->ab_mix_status = Control::where('device_id', $device)->where('control_type', 'Pompa_Nutrisi')->value('status') ?? 0;
        $this->water_level_status = Control::where('device_id', $device)->where('control_type', 'Pompa_TankiAir')->value('status') ?? 0;
        $this->spraying_status = Control::where('device_id', $device)->where('control_type', 'Spraying')->value('status') ?? 0;
    }

    public function render()
    {
        return view('livewire.aeroponik');
    }
}
