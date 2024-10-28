<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class reportcontroller extends Controller


{
    //
    public function index(){

        return view("report.index");
    }

    public function generateReport(Request $request) {
        $deviceType = $request->input('device_type');
        $timeRange = $request->input('time_range');
        
        switch($timeRange) {
            case '1 Hari':
                $interval = '1 DAY';
                break;
            case '1 Minggu':
                $interval = '1 WEEK';
                break;
            case '1 Bulan':
                $interval = '1 MONTH';
                break;
            case '3 Bulan':
                $interval = '3 MONTH';
                break;
            case '6 Bulan':
                $interval = '6 MONTH';
                break;
            default:
                $interval = '1 WEEK';
        }

        $tableName = '';
        $selectColumns = '';


        if ($deviceType == 'hydroponik') {
            $tableName = 'SensorData_SMART_HYDROPONIK';
            $selectColumns = '
                AVG(suhu) as avg_suhu,
                AVG(ph) as avg_ph,
                AVG(tds) as avg_tds,
                AVG(volume_air) as avg_volume_air,
                AVG(suhu_air) as avg_suhu_air';
        } elseif ($deviceType == 'aeroponik') {
            $tableName = 'SensorData_SMART_AEROPONIK';
            $selectColumns = '
                AVG(suhu) as avg_suhu,
                AVG(ph) as avg_ph,
                AVG(tds) as avg_tds,
                AVG(humidity) as avg_humidity,
                AVG(volume_air) as avg_volume_air';
        } elseif ($deviceType == 'greenhouse') {
            $tableName = 'SensorData_SMART_GREENHOUSE';
            $selectColumns = '
                AVG(temperature) as avg_temperature,
                AVG(humidity) as avg_humidity,
                AVG(co2) as avg_co2,
                AVG(light_intensity) as avg_light_intensity,
                AVG(water_consumption) as avg_water_consumption';
        }

        if (empty($tableName) || empty($columns)) {
            return response()->json(['message' => 'Device type tidak valid atau tabel tidak ditemukan'], 400);
        }

        $data = DB::table($tableName)
            ->select(DB::raw("$selectColumns, DATE_FORMAT(timestamp, '%Y-%m-%d %H:00:00') as hour_block"))
            ->whereRaw("timestamp >= NOW() - INTERVAL $interval")
            ->groupBy('hour_block')
            ->orderBy('hour_block', 'ASC')
            ->get();

        if($data->isEmpty()) {
            return response()->json(['message' => 'Data tidak ditemukan'], 404);
        }
        return response()->json($data);
    }
}
