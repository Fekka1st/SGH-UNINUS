@extends('layout.master')
@section('title', 'Aerophonik')

@section('css')

@endsection

@section('content')
    <div class="container-fluid">
        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Aeroponic</h1>

        <div class="row">
            <!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Water PH
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
                                    1000 PPM
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
                                    30 %
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-thermometer-full"></i>
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
                                    Water Height
                                </div>
                                <div>
                                    100 cm
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-water"></i>
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
                                    Relative Humidity
                                </div>
                                <div>
                                    50 %
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-wind"></i>
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
                        <h6 class="m-0 font-weight-bold text-primary" style="text-align: center; margin: 2%; width: 100%">
                            Controlling Aeroponic</h6>
                    </div>
                    <div class="container">
                        <div class="d-flex flex-wrap justify-content-center align-items-center;" style="margin: 2%">
                            <!-- Tombol PH Air -->
                            <div class="m-3">
                                <button class="btn btn-primary" type="submit"
                                    style="border: 1px solid #4e73df; padding: 20px; width: 200px; text-align: center; background-color: #4e73df; color: #ffffff; cursor: pointer;">
                                    <h3 style="color: white;">Water PH</h3>
                                    <div class="col-auto">
                                        <i class="fas fa-tint"></i>
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

                            <!-- Tombol Spraying -->
                            <div class="m-3">
                                <button class="btn btn-primary" type="submit"
                                    style="border: 1px solid #4e73df; padding: 20px; width: 200px; text-align: center; background-color: #4e73df; color: #ffffff; cursor: pointer;">
                                    <h3 style="color: white;">Spraying</h3>
                                    <div class="col-auto">
                                        <i class="fas fa-spray-can"></i>
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
                    <div class="row">
                        <div class="center" style="text-align: center; margin: 1%; width: 50.5%">
                            <button class="btn btn-primary mb-2" type="submit">Manual</button>
                        </div>
                        <div class="center" style="text-align: center; margin: 1%; width: 40%">
                            <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                data-bs-target="#exampleModal">
                                Setting
                            </button>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Setting Limit</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form id="temperatureForm">
                                                <label for="temperature">Ph Min :</label>
                                                <input type="number" id="temperature" name="temperature" required />
                                            </form>
                                            <form id="temperatureForm">
                                                <label for="temperature">Ph Max:</label>
                                                <input type="number" id="temperature" name="temperature" required />
                                            </form>
                                            <br>
                                            <form id="temperatureForm">
                                                <label for="temperature">Nutrisi Min :</label>
                                                <input type="number" id="temperature" name="temperature" required />
                                            </form>
                                            <form id="temperatureForm">
                                                <label for="temperature">Nutrisi Max:</label>
                                                <input type="number" id="temperature" name="temperature" required />
                                            </form>
                                            <br>
                                            <form id="temperatureForm">
                                                <label for="temperature">Spray Start:</label>
                                                <input type="number" id="temperature" name="temperature" required />
                                            </form>
                                            <form id="temperatureForm">
                                                <label for="temperature">Spray End :</label>
                                                <input type="number" id="temperature" name="temperature" required />
                                            </form>
                                            <br>
                                            <form id="temperatureForm">
                                                <label for="temperature">Tangki Air :</label>
                                                <input type="number" id="temperature" name="temperature" required />
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                    <button class="btn btn-primary btn-sm w-100" style="width: 100px;" onclick="updateCharts(1)">Real-Time</button>
                                </div>
                                <div class="col-6 col-md-1 mb-2">
                                    <button class="btn btn-primary btn-sm w-100" style="width: 100px;" onclick="updateCharts(2)">1 Hour</button>
                                </div>
                                <div class="col-6 col-md-1 mb-2">
                                    <button class="btn btn-primary btn-sm w-100" style="width: 100px;" onclick="updateCharts(3)">6 Hour</button>
                                </div>
                                <div class="col-6 col-md-1 mb-2">
                                    <button class="btn btn-primary btn-sm w-100" style="width: 100px;" onclick="updateCharts(4)">1 Day</button>
                                </div>
                                <div class="col-6 col-md-1 mb-2">
                                    <button class="btn btn-primary btn-sm w-100" style="width: 100px;" onclick="updateCharts(5)">1 Week</button>
                                </div>
                                <div class="col-6 col-md-2 mb-2">
                                    <button class="btn btn-primary btn-sm w-100" style="width: 100px;" onclick="updateCharts(6)">1 Month</button>
                                </div>
                                <div class="col-6 col-md-2 mb-2">
                                    <button class="btn btn-primary btn-sm w-100" style="width: 100px;" onclick="updateCharts(7)">6 Month</button>
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
                                <h6 class="m-0 font-weight-bold text-primary">(Water Temperature and Relative Humidity)</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area">
                                    <div class="col-xl-13">
                                        <canvas id="myChart"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-7">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Water Level</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="kelembapan"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-7">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary">Water PH</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="co2"></canvas>
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
                                    <canvas id="cahaya"></canvas>
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
        const xValues = ["00:00", "03:00", "06:00", "09:00", "12:00", "15:00", "18:00", "21:00"];
        new Chart("myChart", {
            type: "line",
            data: {
                labels: xValues,
                datasets: [{
                    label: 'Water Temperature',
                    data: [0, 26, 27, 28, 30, 25, 27, 26],
                    borderColor: "orange",
                    fill: true
                }, {
                    label: 'Relative Humidity',
                    data: [50, 70, 60, 50, 60, 70, 80, 100],
                    borderColor: "blue",
                    fill: true
                }]
            },
            options: {
                legend: {
                    display: true
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
                    data: [100, 90, 70, 60, 50, 35, 25, 10], // Contoh data suhu
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
                                return value + ' PH';
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
                                return value + ' PPM';
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
                            return datasetLabel + ': ' + tooltipItem.yLabel + '%';
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
