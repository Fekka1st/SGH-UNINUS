<?php

namespace App\Livewire;

use App\Models\control;
use App\Models\device;
use App\Models\device_settings;
use App\Models\extend_device;
use App\Models\SensorDataSmartGreenhouse;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Http;
use Livewire\Component;

class Greenhouse extends Component
{
    public $data;
    public $control;
    public $setting;
    public $device;
    public $status;
    public $lastSeen;
    public $extend;
    public $extend_status;
    public $extend_lastSeen;

    public $fan_status;

    public $Cooling_Sistem_Active, $Cooling_Sistem_Inactive;

    private $url = "http://127.0.0.1:1880";
    public function mount()
    {
        $this->loadsetting();
        $this->refreshData();
        $this->lastSeen();
        $this->fan();
    }

    public function lastseen()
    {
        $device = device::find(3);
        if ($device->status === 1) {
            $this->status = 1;
            $this->lastSeen = null;
        } else {
            $this->status = 0;
            $this->lastSeen = Carbon::parse($device->updated_at)->diffForHumans();
        }
    }

    public function fan()
    {
        $this->fan_status =
            Control::where("device_id", 3)
                ->where("control_type", "Cooling_System")
                ->value("status") ?? 0;
    }

    public function toggleFan($fan)
    {
        try {
            $control = control::where("device_id", 3)
                ->where("control_type", $fan)
                ->first();

            if ($control) {
                $initialStatus = $control->status;
                $control->status = $control->status == 1 ? 0 : 1;
                $notif = $control->status == 1 ? "On" : "Off";
                $control->save();

                $response = Http::post("{$this->url}/api/control/device", [
                    "pump" => $fan,
                    "validation" => "send",
                    "status" => $control->status,
                    "device_id" => 3,
                ]);
                if ($response->successful()) {
                    $message = "$fan sekarang $notif";
                    $this->dispatch("show-sweetalert", [
                        "type" => "success",
                        "message" => $message,
                    ]);
                    $this->fan();
                } else {
                    $control->status = $initialStatus;
                    $control->save();

                    $message = "Alat $fan gagal mengirim trigger status dikembalikan ke semula.";
                    $this->dispatch("show-sweetalert", [
                        "type" => "error",
                        "message" => $message,
                    ]);
                    $this->fan();
                }
            } else {
                $this->dispatch("show-sweetalert", [
                    "type" => "error",
                    "message" => "Control tidak ditemukan.",
                ]);
            }
        } catch (\Exception $e) {
            if (isset($initialStatus)) {
                $control->status = $initialStatus;
                $control->save();
            }
            $this->dispatch("show-sweetalert", [
                "type" => "error",
                "message" => "Terjadi kesalahan: " . $e->getMessage(),
            ]);
        }
    }

    public function refreshData()
    {
        $this->lastseen();
        $this->device = device::find(3);
        $this->data = SensorDataSmartGreenhouse::latest("created_at")->first();
        $this->control = control::where("device_id", 3)->get();
        $this->extend = extend_device::where('device_id', 3)
        ->where('name_device', 'water_level')
        ->orderBy('created_at', 'desc')
        ->first();

        if (!$this->data) {
            $this->dispatch("show-sweetalert", [
                "type" => "error",
                "message" => "data tidak ditemukan",
            ]);
            return;
        }

        if ($this->device->status === 1) {
            $this->dispatch("updateSensorData", [
                "suhu_avg" => $this->data->suhu_avg,
                "kelembaban_avg" => $this->data->kelembaban_avg,
                "intensitas_cahaya" => $this->data->intensitas,
                "co2" => $this->data->co2,
                "water_level" => $this->data->water_level,
            ]);
        }
    }

    public function update()
    {
        try {
            $validated = $this->validate([
                "Cooling_Sistem_Active" => "required|numeric",
                "Cooling_Sistem_Inactive" => "required|numeric",
            ]);

            DB::beginTransaction();

            $deviceId = 3;
            $settings = device_settings::where("device_id", $deviceId)->get();

            foreach ($settings as $setting) {
                if (array_key_exists($setting->setting_name, $validated)) {
                    $setting->setting_value =
                        $validated[$setting->setting_name];
                    $setting->save();
                }
            }

            $response = Http::post(
                "{$this->url}/api/hydroponik/update-setting",
                [
                    "validation" => "send_data_hydro",
                    "device_id" => $deviceId,
                ]
            );
            if ($response->successful()) {
                DB::commit();
                $message = "Data Berhasil diperbaruhi";
                $this->dispatch("show-sweetalert", [
                    "type" => "success",
                    "message" => $message,
                ]);
                $this->dispatch("closeModal");
            } else {
                DB::rollBack();
                $this->dispatch("show-sweetalert", [
                    "type" => "error",
                    "message" =>
                        "Gagal mengirim data ke server. Perubahan dibatalkan.",
                ]);
            }
        } catch (\Exception $e) {
            DB::rollBack();
            $this->dispatch("show-sweetalert", [
                "type" => "error",
                "message" => "Terjadi kesalahan: " . $e->getMessage(),
            ]);
        }
    }

    public function loadsetting()
    {
        $this->setting = device_settings::where("device_id", 3)->pluck(
            "setting_value",
            "setting_name"
        );
        $this->Cooling_Sistem_Active =
            $this->setting["Cooling_Sistem_Active"] ?? null;
        $this->Cooling_Sistem_Inactive =
            $this->setting["Cooling_Sistem_Inactive"] ?? null;
    }

    public function openModal()
    {
        $this->dispatch("openModal");
    }

    public function closeModal()
    {
        $this->dispatch("closeModal");
    }

    public function render()
    {
        return view("livewire.greenhouse");
    }
}
