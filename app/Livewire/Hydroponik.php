<?php

namespace App\Livewire;

use App\Models\Control;
use App\Models\device;
use App\Models\SensorDataSmartHydroponik;
use App\Models\device_settings;
use Carbon\Carbon;
use Livewire\Component;
use Illuminate\Support\Facades\Http;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\DB;

class Hydroponik extends Component
{
    public $data;
    public $control;
    public $setting;
    public $device;
    public $status;
    public $lastSeen;

    public $pump_ph_up_status,
        $water_level_status,
        $pump_ph_down_status,
        $ab_mix_status;
    public $Limit_ph_min,
        $Limit_ph_max,
        $Limit_nutrisi_min,
        $Limit_nutrisi_max,
        $tangki_air;

    private $url = "http://127.0.0.1:1880";

    public function mount()
    {
        $this->refreshData();
        $this->pump();
        $this->loadSetting();
        $this->lastseen();
    }

    public function loadSetting()
    {
        $this->setting = device_settings::where("device_id", 1)->pluck(
            "setting_value",
            "setting_name"
        );
        $this->Limit_ph_min = $this->setting["Limit_ph_min"] ?? null;
        $this->Limit_ph_max = $this->setting["Limit_ph_max"] ?? null;
        $this->Limit_nutrisi_min = $this->setting["Limit_nutrisi_min"] ?? null;
        $this->Limit_nutrisi_max = $this->setting["Limit_nutrisi_max"] ?? null;
        $this->tangki_air = $this->setting["tangki_air"] ?? null;
    }

    public function lastseen()
    {
        $device = device::find(1);
        if ($device->status === 1) {
            $this->status = 1;
            $this->lastSeen = null;
        } else {
            $this->status = 0;
            $this->lastSeen = Carbon::parse(
                $device->updated_at
            )->diffForHumans();
        }
    }

    public function refreshData()
    {
        $this->lastseen();
        $this->device = device::find(1);
        $this->data = SensorDataSmartHydroponik::latest("created_at")->first();
        $this->control = Control::where("device_id", 1)->get();

        if (!$this->data) {
            $this->dispatch("show-sweetalert", [
                "type" => "error",
                "message" => 'data tidak ditemukan',
            ]);
            return;
        }

        if ($this->device->status === 1) {
            $this->dispatch("updateSensorData", [
                "suhu_air" => $this->data->suhu_air,
                "laju_air" => $this->data->laju_air,
                "ph_air" => $this->data->ph_air,
                "tds" => $this->data->tds,
                "volume_air" => $this->data->volume_air,
            ]);
        }
    }

    public function pump()
    {
        $this->pump_ph_up_status =
            Control::where("device_id", 1)
                ->where("control_type", "Pompa_PHUP")
                ->value("status") ?? 0;
        $this->pump_ph_down_status =
            Control::where("device_id", 1)
                ->where("control_type", "Pompa_PHDOWN")
                ->value("status") ?? 0;
        $this->ab_mix_status =
            Control::where("device_id", 1)
                ->where("control_type", "Pompa_Nutrisi")
                ->value("status") ?? 0;
        $this->water_level_status =
            Control::where("device_id", 1)
                ->where("control_type", "Pompa_TankiAir")
                ->value("status") ?? 0;
    }

    public function togglePump($pump)
    {
        try {
            $control = Control::where("device_id", 1)
                ->where("control_type", $pump)
                ->first();

            if ($control) {
                $initialStatus = $control->status;
                $control->status = $control->status == 1 ? 0 : 1;
                $notif = $control->status == 1 ? "On" : "Off";
                $control->save();

                $response = Http::post("{$this->url}/api/control/device", [
                    "pump" => $pump,
                    "validation" => "send",
                    "status" => $control->status,
                    "device_id" => 1,
                ]);
                if ($response->successful()) {
                    $message = "Pompa sekarang $notif";
                    $this->dispatch("show-sweetalert", [
                        "type" => "success",
                        "message" => $message,
                    ]);
                    $this->pump();
                } else {
                    $control->status = $initialStatus;
                    $control->save();

                    $message = "Pompa $pump gagal mengirim trigger status dikembalikan ke semula.";
                    $this->dispatch("show-sweetalert", [
                        "type" => "error",
                        "message" => $message,
                    ]);
                    $this->pump();
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

    public function changemode($id)
    {
        try {
            $device = Device::find($id);
            if ($device) {
                $device->timestamps = false;
                $device->mode = $device->mode == 1 ? 0 : 1;
                $initialStatus = $device->mode;
                $notif = $device->mode == 1 ? "Auto" : "Manual";
                $device->save();
                $device->timestamps = true;

                $response = Http::post("{$this->url}/api/control/mode/device", [
                    "mode" => $device->mode == 1 ? "Automatis" : "Manual",
                    "validation" => "send",
                    "status" => $device->mode,
                    "device_id" => $id,
                ]);
                if ($response->successful()) {
                    $message = "Mode $notif Aktif";
                    $this->dispatch("show-sweetalert", [
                        "type" => "success",
                        "message" => $message,
                    ]);
                    $this->refreshData();
                } else {
                    $device->mode = $initialStatus;
                    $device->save();

                    $message =
                        "Mode, gagal mengirim trigger status dikembalikan ke semula.";
                    $this->dispatch("show-sweetalert", [
                        "type" => "error",
                        "message" => $message,
                    ]);
                }
            } else {
                $this->dispatch("show-sweetalert", [
                    "type" => "error",
                    "message" => "Mode tidak ditemukan.",
                ]);
            }
        } catch (\Exception $e) {
            if (isset($initialStatus)) {
                $device->status = $initialStatus;
                $device->save();
            }
            $this->dispatch("show-sweetalert", [
                "type" => "error",
                "message" => "Terjadi kesalahan: " . $e->getMessage(),
            ]);
        }
    }

    public function update()
    {
        try {
            $validated = $this->validate([
                "Limit_ph_min" => "required|numeric",
                "Limit_ph_max" => "required|numeric",
                "Limit_nutrisi_min" => "required|numeric",
                "Limit_nutrisi_max" => "required|numeric",
                "tangki_air" => "required|numeric",
            ]);

            DB::beginTransaction();

            $deviceId = 1;
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
        return view("livewire.hydroponik");
    }

}
