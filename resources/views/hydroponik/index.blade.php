@extends('layout.master')
@section('title', 'Hydroponik')

@section('css')

@endsection

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Hydroponic</h1>
        <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Water pH
                                </div>
                                <div>
                                    {{$data->ph_air}}
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-tint"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Nutrition
                                </div>
                                <div>
                                    {{$data->tds}}
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fab fa-nutritionix"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                  Water Temperature
                                </div>
                                <div>
                                 {{$data->suhu_air}}
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-thermometer-full"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Water Level
                                </div>
                                <div>
                                    {{$data->volume_air}}
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-water"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Water Flow
                                </div>
                                <div>
                                    {{$data->laju_air}}
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-tachometer-alt"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary" style="text-align: center; margin: 2%; width: 100%">Controlling Hydroponic</h6>
                    </div>

                    @if ($device->mode == 1)
                    <div>Mode: Auto </div>
                    @else
                    <div class="container">
                        <div class="d-flex flex-wrap justify-content-center align-items-center;" style="margin: 2%">
                            <!-- Tombol PH Air -->
                            <div class="m-3">

                                <button class="btn btn-primary" type="submit"
                                    style="border: 1px solid #4e73df; padding: 20px; width: 200px; text-align: center; background-color: #4e73df; color: #ffffff; cursor: pointer;">
                                    <h3 style="color: white;">Pompa Water PH UP</h3>
                                    <div class="col-auto">
                                        <i class="fas fa-tint"></i>
                                        <h4 class="text-danger"><b>OFF</b></h4>
                                    </div>
                                </button>

                            </div>
                            <!-- Tombol AB Mix -->
                            <div class="m-3">
                                <button class="btn btn-primary" type="submit"
                                    style="border: 1px solid #4e73df; padding: 20px; width: 200px; text-align: center; background-color: #4e73df; color: #ffffff; cursor: pointer;">
                                    <h3 style="color: white;">AB Mix</h3>
                                    <div class="col-auto">
                                        <i class="fab fa-nutritionix"></i>
                                    </div>
                                </button>
                            </div>
                            <!-- Tombol Air Tangki -->
                            <div class="m-3">
                                <button class="btn btn-primary" type="submit"
                                    style="border: 1px solid #4e73df; padding: 20px; width: 200px; text-align: center; background-color: #4e73df; color: #ffffff; cursor: pointer;">
                                    <h3 style="color: white;">Water Level</h3>
                                    <div class="col-auto">
                                        <i class="fas fa-water"></i>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>

                    @endif

                    <div class="row">
                        <form action="{{ route('changeMode', $device->id) }}" method="POST" style="text-align: center; margin: 1%; width: 50.5%">
                            @csrf
                            @if ($device->mode == 1)
                                <button class="btn btn-primary mb-2" type="submit">Mode: Auto</button>
                            @else
                                <button class="btn btn-primary mb-2" type="submit">Mode: Manual</button>
                            @endif
                        </form>

                            <div class="center" style="text-align: center; margin: 1%; width: 40%">
                                <button type="button" class="btn btn-primary" data-toggle="modal"
                                    data-target="#greenhouseadjusttable">
                                    Settings
                                </button>
                            </div>
                        <!-- Modal -->
                            <div class="modal fade" id="greenhouseadjusttable" tabindex="-1" role="dialog" aria-labelledby="greenhouseadjusttableLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="greenhouseadjusttableLabel">Settings</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                                <div>
                                                    <label for="minTemp">Water PH Up: </label>
                                                    <input type="number" id="minTemp" value={{$setting['Limit_ph_min']}} style="width: 100px; border: none; padding: 5px;" />
                                                    <label for="maxTemp">PH </label>
                                                </div>
                                                <div>
                                                    <label for="maxTemp">Water PH Down: </label>
                                                    <input type="number" id="maxTemp" value={{$setting['Limit_ph_max']}} style="width: 80px; border: none; padding: 5px;" />
                                                    <label for="maxTemp">PH </label>
                                                </div><br>
                                                <div>
                                                    <label for="minTemp">Nutrition Up: </label>
                                                    <input type="number" id="minTemp" value={{$setting['Limit_nutrisi_min']}} style="width: 100px; border: none; padding: 5px;" />
                                                    <label for="maxTemp">PPM </label>
                                                </div>
                                                <div>
                                                    <label for="maxTemp">Nutrition Down: </label>
                                                    <input type="number" id="maxTemp" value={{$setting['Limit_nutrisi_max']}} style="width: 80px; border: none; padding: 5px;" />
                                                    <label for="maxTemp">PPM </label>
                                                </div><br>
                                                <div>
                                                    <label for="maxTemp">Water Level: </label>
                                                    <input type="number" id="maxTemp" value={{$setting['tangki_air']}} style="width: 100px; border: none; padding: 5px;" />
                                                    <label for="maxTemp">Cm </label>
                                                </div>
                                            </div>
                                            <div class="result" id="result"></div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-secondary mb-2" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                            <button class="btn btn-primary mb-2" type="button" onclick="setTemperature()">Set</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <div class="result" id="result"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-xl-12 col-lg-8">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary" style="text-align: center; margin: 2%; width: 100%">
                            Chart Monitoring</h6>
                    </div>
                    <div class="row">
                        <div class="container text-center mb-4"><br>
                            <div class="row justify-content-center">
                                <div class="col-6 col-md-2 mb-2">
                                    <button class="btn btn-primary btn-sm w-100" style="width: 100px;" onclick="updateCharts(1)" display: flex;>Real-Time</button>
                                </div>
                                <div class="col-6 col-md-1 mb-2">
                                    <button class="btn btn-primary btn-sm w-100" style="width: 100px;" onclick="updateCharts(2)" display: flex;>1 Hour</button>
                                </div>
                                <div class="col-6 col-md-1 mb-2">
                                    <button class="btn btn-primary btn-sm w-100" style="width: 100px;" onclick="updateCharts(3)" display: flex;>6 Hour</button>
                                </div>
                                <div class="col-6 col-md-1 mb-2">
                                    <button class="btn btn-primary btn-sm w-100" style="width: 100px;" onclick="updateCharts(4)" display: flex;>1 Day</button>
                                </div>
                                <div class="col-6 col-md-1 mb-2">
                                    <button class="btn btn-primary btn-sm w-100" style="width: 100px;" onclick="updateCharts(5)" display: flex;>1 Week</button>
                                </div>
                                <div class="col-6 col-md-2 mb-2">
                                    <button class="btn btn-primary btn-sm w-100" style="width: 100px;" onclick="updateCharts(6)" display: flex;>1 Month</button>
                                </div>
                                <div class="col-6 col-md-2 mb-2">
                                    <button class="btn btn-primary btn-sm w-100" style="width: 100px;" onclick="updateCharts(7)" display: flex;>6 Month</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Content Row -->
                    <div class="row">
                        <div class="col-xl-6 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Water Temperature</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="suhu"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Water Flow</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="laju"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Water pH</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="Co²"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-6 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Nutrition</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="ppm"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary">Water Level</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="tangki"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('script')
    <script>
        Chart.defaults.global.defaultFontFamily = 'Nunito',
            '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#858796';
        var ctx = document.getElementById("suhu");
        var suhu = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["00:00", "03:00", "06:00", "09:00", "12:00", "15:00", "18:00", "21:00"],
                datasets: [{
                    label: "Temperature",
                    lineTension: 0.3,
                    backgroundColor: "rgba(78, 115, 223, 0.05)",
                    borderColor: "rgba(78, 115, 223, 1)",
                    pointRadius: 3,
                    pointBackgroundColor: "rgba(78, 115, 223, 1)",
                    pointBorderColor: "rgba(78, 115, 223, 1)",
                    pointHoverRadius: 3,
                    pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                    pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                    pointHitRadius: 10,
                    pointBorderWidth: 2,
                    data: [29, 29, 30, 29, 30, 28, 29, 29], // Contoh data suhu
                }],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [{
                        time: {
                            unit: 'hour'
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            maxTicksLimit: 8
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            maxTicksLimit: 5,
                            padding: 10,
                            // Include a degree symbol in the ticks
                            callback: function(value, index, values) {
                                return value + '°C';
                            }
                        },
                        gridLines: {
                            color: "rgb(234, 236, 244)",
                            zeroLineColor: "rgb(234, 236, 244)",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2]
                        }
                    }],
                },
                legend: {
                    display: false
                },
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    titleMarginBottom: 10,
                    titleFontColor: '#6e707e',
                    titleFontSize: 14,
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    intersect: false,
                    mode: 'index',
                    caretPadding: 10,
                    callbacks: {
                        label: function(tooltipItem, chart) {
                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                            return datasetLabel + ': ' + tooltipItem.yLabel + '°C';
                        }
                    }
                }
            }
        });
        Chart.defaults.global.defaultFontFamily = 'Nunito',
            '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#858796';
        var ctx = document.getElementById("laju");
        var laju = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["00:00", "03:00", "06:00", "09:00", "12:00", "15:00", "18:00", "21:00"],
                datasets: [{
                    label: "Water Speed",
                    lineTension: 0.3,
                    backgroundColor: "rgba(78, 115, 223, 0.05)",
                    borderColor: "rgba(78, 115, 223, 1)",
                    pointRadius: 3,
                    pointBackgroundColor: "rgba(78, 115, 223, 1)",
                    pointBorderColor: "rgba(78, 115, 223, 1)",
                    pointHoverRadius: 3,
                    pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                    pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                    pointHitRadius: 10,
                    pointBorderWidth: 2,
                    data: [1, 3, 5, 7, 5, 9, 11, 13], // Contoh data suhu
                }],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [{
                        time: {
                            unit: 'hour'
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            maxTicksLimit: 8
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            maxTicksLimit: 5,
                            padding: 10,
                            // Include a degree symbol in the ticks
                            callback: function(value, index, values) {
                                return value + ' m/s';
                            }
                        },
                        gridLines: {
                            color: "rgb(234, 236, 244)",
                            zeroLineColor: "rgb(234, 236, 244)",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2]
                        }
                    }],
                },
                legend: {
                    display: false
                },
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    titleMarginBottom: 10,
                    titleFontColor: '#6e707e',
                    titleFontSize: 14,
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    intersect: false,
                    mode: 'index',
                    caretPadding: 10,
                    callbacks: {
                        label: function(tooltipItem, chart) {
                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                            return datasetLabel + ': ' + tooltipItem.yLabel + 'm/s';
                        }
                    }
                }
            }
        });
        Chart.defaults.global.defaultFontFamily = 'Nunito',
            '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#858796';
        var ctx = document.getElementById("Co²");
        var co2 = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["00:00", "03:00", "06:00", "09:00", "12:00", "15:00", "18:00", "21:00"],
                datasets: [{
                    label: "Ph High",
                    lineTension: 0.3,
                    backgroundColor: "rgba(78, 115, 223, 0.05)",
                    borderColor: "rgba(78, 115, 223, 1)",
                    pointRadius: 3,
                    pointBackgroundColor: "rgba(78, 115, 223, 1)",
                    pointBorderColor: "rgba(78, 115, 223, 1)",
                    pointHoverRadius: 3,
                    pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                    pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                    pointHitRadius: 10,
                    pointBorderWidth: 2,
                    data: [0, 1, 3.5, 4.5, 5, 6, 7.5, 6], // Contoh data suhu
                }],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [{
                        time: {
                            unit: 'hour'
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            maxTicksLimit: 8
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            maxTicksLimit: 5,
                            padding: 10,
                            // Include a degree symbol in the ticks
                            callback: function(value, index, values) {
                                return value + ' pH';
                            }
                        },
                        gridLines: {
                            color: "rgb(234, 236, 244)",
                            zeroLineColor: "rgb(234, 236, 244)",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2]
                        }
                    }],
                },
                legend: {
                    display: false
                },
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    titleMarginBottom: 10,
                    titleFontColor: '#6e707e',
                    titleFontSize: 14,
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    intersect: false,
                    mode: 'index',
                    caretPadding: 10,
                    callbacks: {
                        label: function(tooltipItem, chart) {
                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                            return datasetLabel + ': ' + tooltipItem.yLabel + 'pH';
                        }
                    }
                }
            }
        });
        Chart.defaults.global.defaultFontFamily = 'Nunito',
            '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#858796';
        var ctx = document.getElementById("ppm");
        var ppm = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["00:00", "03:00", "06:00", "09:00", "12:00", "15:00", "18:00", "21:00"],
                datasets: [{
                    label: "Zat Terlarut",
                    lineTension: 0.3,
                    backgroundColor: "rgba(78, 115, 223, 0.05)",
                    borderColor: "rgba(78, 115, 223, 1)",
                    pointRadius: 3,
                    pointBackgroundColor: "rgba(78, 115, 223, 1)",
                    pointBorderColor: "rgba(78, 115, 223, 1)",
                    pointHoverRadius: 3,
                    pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                    pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                    pointHitRadius: 10,
                    pointBorderWidth: 2,
                    data: [1000, 800, 700, 600, 800, 700, 800, 500], // Contoh data suhu
                }],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [{
                        time: {
                            unit: 'hour'
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            maxTicksLimit: 8
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            maxTicksLimit: 5,
                            padding: 10,
                            // Include a degree symbol in the ticks
                            callback: function(value, index, values) {
                                return value + ' ppm';
                            }
                        },
                        gridLines: {
                            color: "rgb(234, 236, 244)",
                            zeroLineColor: "rgb(234, 236, 244)",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2]
                        }
                    }],
                },
                legend: {
                    display: false
                },
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    titleMarginBottom: 10,
                    titleFontColor: '#6e707e',
                    titleFontSize: 14,
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    intersect: false,
                    mode: 'index',
                    caretPadding: 10,
                    callbacks: {
                        label: function(tooltipItem, chart) {
                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                            return datasetLabel + ': ' + tooltipItem.yLabel + 'ppm';
                        }
                    }
                }
            }
        });

        Chart.defaults.global.defaultFontFamily = 'Nunito',
            '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
        Chart.defaults.global.defaultFontColor = '#858796';
        var ctx = document.getElementById("tangki");
        var tangki = new Chart(ctx, {
            type: 'line',
            data: {
                labels: ["00:00", "03:00", "06:00", "09:00", "12:00", "15:00", "18:00", "21:00"],
                datasets: [{
                    label: "Air Terisi",
                    lineTension: 0.3,
                    backgroundColor: "rgba(78, 115, 223, 0.05)",
                    borderColor: "rgba(78, 115, 223, 1)",
                    pointRadius: 3,
                    pointBackgroundColor: "rgba(78, 115, 223, 1)",
                    pointBorderColor: "rgba(78, 115, 223, 1)",
                    pointHoverRadius: 3,
                    pointHoverBackgroundColor: "rgba(78, 115, 223, 1)",
                    pointHoverBorderColor: "rgba(78, 115, 223, 1)",
                    pointHitRadius: 10,
                    pointBorderWidth: 2,
                    data: [100, 80, 70, 50, 30, 20, 10, 0], // Contoh data suhu
                }],
            },
            options: {
                maintainAspectRatio: false,
                layout: {
                    padding: {
                        left: 10,
                        right: 25,
                        top: 25,
                        bottom: 0
                    }
                },
                scales: {
                    xAxes: [{
                        time: {
                            unit: 'hour'
                        },
                        gridLines: {
                            display: false,
                            drawBorder: false
                        },
                        ticks: {
                            maxTicksLimit: 8
                        }
                    }],
                    yAxes: [{
                        ticks: {
                            maxTicksLimit: 5,
                            padding: 10,
                            // Include a degree symbol in the ticks
                            callback: function(value, index, values) {
                                return value + ' Cm';
                            }
                        },
                        gridLines: {
                            color: "rgb(234, 236, 244)",
                            zeroLineColor: "rgb(234, 236, 244)",
                            drawBorder: false,
                            borderDash: [2],
                            zeroLineBorderDash: [2]
                        }
                    }],
                },
                legend: {
                    display: false
                },
                tooltips: {
                    backgroundColor: "rgb(255,255,255)",
                    bodyFontColor: "#858796",
                    titleMarginBottom: 10,
                    titleFontColor: '#6e707e',
                    titleFontSize: 14,
                    borderColor: '#dddfeb',
                    borderWidth: 1,
                    xPadding: 15,
                    yPadding: 15,
                    displayColors: false,
                    intersect: false,
                    mode: 'index',
                    caretPadding: 10,
                    callbacks: {
                        label: function(tooltipItem, chart) {
                            var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                            return datasetLabel + ': ' + tooltipItem.yLabel + 'Cm';
                        }
                    }
                }
            }
        });
        document
            .getElementById("temperatureForm")
            .addEventListener("submit", function(event) {
                event.preventDefault(); // Mencegah reload halaman

                // Mendapatkan nilai suhu yang diinput oleh pengguna
                const temperature = document.getElementById("temperature").value;

                // Menampilkan hasil
                const resultDiv = document.getElementById("result");
                resultDiv.textContent =
                    "Suhu diatur ke : " + temperature + "°C";
            });
    </script>
@endsection
