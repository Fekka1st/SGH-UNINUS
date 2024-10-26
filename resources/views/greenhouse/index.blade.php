@extends('layout.master')
@section('title','GreenHouse')

@section('css')


@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Greenhouse</h1>

    <div class="row">
        <!-- Suhu Card -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Suhu</div>
                            <div>30°C</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-thermometer-full"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kelembapan Card -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Kelembapan</div>
                            <div>50%</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-wind"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- CO2 Card -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">CO2</div>
                            <div>2000PPM</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-spa"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Intensitas Cahaya Card -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Intensitas Cahaya</div>
                            <div>2000 lx</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-lightbulb"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <!-- Pemakaian Air Card -->
        <div class="col-xl-4 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pemakaian Air</div>
                            <div>1000 Liter</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-water"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
        
        
        
    <div class="row">
        <!-- Grafik Suhu -->
        <div class="col-xl-6 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">AVG Suhu</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="suhu"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-6 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Kontroling</h6>
                </div>
                    <div class="card-body">
                    <div style="text-align: center;"><br>
                        <button id="fanButton" class="btn" onclick="toggleFan()" style="background-color: green; color: white; padding: 10px 20px; border: none; border-radius: 5px;">
                            Kipas Menyala
                        </button>
                    </div><br>
                    <div style="text-align: center">
                        <label>Auto</label><br>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#greenhouseadjusttable">
                        Settings
                        </button>

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
                                    <label for="minTemp">Minimal Suhu: </label>
                                    <input type="number" id="minTemp" value="0" style="width: 100px; border: none; padding: 5px;" />
                                </div>
                                <br>
                                <div>
                                    <label for="maxTemp">Maksimal Suhu: </label>
                                    <input type="number" id="maxTemp" value="100" style="width: 100px; border: none; padding: 5px;" />
                                </div>
                            </div>

                            <div class="result" id="result"></div>

                            </div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary mb-2" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button class="btn btn-primary mb-2" type="button" onclick="setTemperature()">Set Suhu</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                        <div class="result" id="result"></div>
                    </div><br>
                </div>
            </div>
       
        
        
            <div class="col-xl-6 col-md-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text- text-uppercase mb-1">
                                <h5>Suhu : 1</h5>
                                <h6>29°C</h6>
                                <div>
                                <h5>Suhu : 1</h5>
                                <h6>28°C</h2>
                                </div>
                                <div>
                                <h5>Suhu : 1</h5>
                                <h6>29°C</h2>
                                </div>
                                <div>
                                <h5>Suhu : 1</h5>
                                <h6>28°C</h2>
                                </div>
                                <div>
                                <h5>Suhu : 1</h5>
                                <h6>28°C</h2>
                                </div>
                                <div>
                                <h5>Suhu : 1</h5>
                                <h6>29°C</h2>
                                </div>
                                <div>
                                <h5>Suhu : 1</h5>
                                <h6>28°C</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-thermometer-full"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div><div class="col-xl-6 col-md-6 mb-4">
            <div class="card shadow mb-4">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text- text-uppercase mb-1">
                                <h5>Kelembapan : 1</h5>
                                <h6>29°C</h6>
                                <div>
                                <h5>Kelembapan : 1</h5>
                                <h6>28°C</h2>
                                </div>
                                <div>
                                <h5>Kelembapan : 1</h5>
                                <h6>29°C</h2>
                                </div>
                                <div>
                                <h5>Kelembapan : 1</h5>
                                <h6>28°C</h2>
                                </div>
                                <div>
                                <h5>Kelembapan : 1</h5>
                                <h6>28°C</h2>
                                </div>
                                <div>
                                <h5>Kelembapan : 1</h5>
                                <h6>29°C</h2>
                                </div>
                                <div>
                                <h5>Kelembapan : 1</h5>
                                <h6>28°C</h2>
                                </div>
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-thermometer-full"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Grafik Kelembapan -->
        <div class="col-xl-6 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">AVG Kelembapan</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="kelembapan"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Grafik CO2 -->
        <div class="col-xl-6 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">CO2</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="co2"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div class="container-fluid">
    <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Suhu dan Kelembapan</h6>
            </div>
            <div class="card-body">
                <div class="chart-area">
                    <canvas id="myChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>

        <!-- Grafik Intensitas Cahaya -->
        <div class="col-xl-6 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Intensitas Cahaya</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="cahaya"></canvas>
                    </div>
                </div>
            </div>
        </div>



        <!-- Grafik Konsumsi Air -->
        <div class="col-xl-6 col-lg-7">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">Konsumsi Air</h6>
                </div>
                <div class="card-body">
                    <div class="chart-area">
                        <canvas id="air"></canvas>
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
                        callback: function (value, index, values) {
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
                    label: function (tooltipItem, chart) {
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
    var ctx = document.getElementById("kelembapan");
    var kelembapan = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["00:00", "03:00", "06:00", "09:00", "12:00", "15:00", "18:00", "21:00"],
            datasets: [{
                label: "Kelembapan",
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
                data: [55, 50, 60, 65, 70, 65, 65, 60], // Contoh data suhu
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
                        callback: function (value, index, values) {
                            return value + '%';
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
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                        return datasetLabel + ': ' + tooltipItem.yLabel + '%';
                    }
                }
            }
        }
    });
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';
    var ctx = document.getElementById("co2");
    var kelembapan = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["00:00", "03:00", "06:00", "09:00", "12:00", "15:00", "18:00", "21:00"],
            datasets: [{
                label: "Kelembapan",
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
                data: [1550, 1500, 1600, 1600, 1700, 1700, 1700, 1800], // Contoh data suhu
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
                        callback: function (value, index, values) {
                            return value + 'ppm';
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
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                        return datasetLabel + ': ' + tooltipItem.yLabel + '%';
                    }
                }
            }
        }
    });
    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';
    var ctx = document.getElementById("cahaya");
    var kelembapan = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["00:00", "03:00", "06:00", "09:00", "12:00", "15:00", "18:00", "21:00"],
            datasets: [{
                label: "Kelembapan",
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
                data: [2600, 2500, 2600, 2600, 2700, 2600, 2800, 3000], // Contoh data suhu
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
                        callback: function (value, index, values) {
                            return value + 'lx';
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
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                        return datasetLabel + ': ' + tooltipItem.yLabel + '%';
                    }
                }
            }
        }
    });

    Chart.defaults.global.defaultFontFamily = 'Nunito',
        '-apple-system,system-ui,BlinkMacSystemFont,"Segoe UI",Roboto,"Helvetica Neue",Arial,sans-serif';
    Chart.defaults.global.defaultFontColor = '#858796';
    var ctx = document.getElementById("air");
    var kelembapan = new Chart(ctx, {
        type: 'line',
        data: {
            labels: ["00:00", "03:00", "06:00", "09:00", "12:00", "15:00", "18:00", "21:00"],
            datasets: [{
                label: "Kelembapan",
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
                data: [55, 60, 65, 70, 75, 80, 85, 90], // Contoh data suhu
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
                        callback: function (value, index, values) {
                            return value + 'Liter';
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
                    label: function (tooltipItem, chart) {
                        var datasetLabel = chart.datasets[tooltipItem.datasetIndex].label || '';
                        return datasetLabel + ': ' + tooltipItem.yLabel + '%';
                    }
                }
            }
        }
    });
    document
        .getElementById("temperatureForm")
        .addEventListener("submit", function (event) {
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
