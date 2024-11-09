<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\SensorDataSmartAeroponik;
use App\Models\SensorDataSmartGreenhouse;
use App\Models\SensorDataSmartHydroponik;
use Carbon\Carbon;

class dashboardcontroller extends Controller
{
    //
    public function index(){
        $user = Auth::user();


        $startDate = Carbon::now()->startOfWeek();
        $today = Carbon::now()->toDateString();
        $hydroDayCount = SensorDataSmartHydroponik::whereDate('created_at', $today)->count();
        $greenDayCount = SensorDataSmartGreenhouse::whereDate('created_at', $today)->count();
        $aeroDayCount = SensorDataSmartAeroponik::whereDate('created_at', $today)->count();
        $hydroDailyCounts = [];
        $greenDailyCounts = [];
        $aeroDailyCounts = [];

        for ($i = 0; $i < 7; $i++) {
            $day = $startDate->copy()->addDays($i);
            $hydroDailyCounts[$day->format('l')] = SensorDataSmartHydroponik::whereDate('created_at', $day)->count();
            $greenDailyCounts[$day->format('l')] = SensorDataSmartGreenhouse::whereDate('created_at', $day)->count();
            $aeroDailyCounts[$day->format('l')] = SensorDataSmartAeroponik::whereDate('created_at', $day)->count();
        }
        return view('dashboard', compact('user', 'hydroDayCount', 'greenDayCount', 'aeroDayCount', 'hydroDailyCounts', 'greenDailyCounts', 'aeroDailyCounts'));
    }
}
