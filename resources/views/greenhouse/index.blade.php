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
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Intensitas Cahaya
                            </div>
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
                        <button id="fanButton" class="btn" onclick="toggleFan()"
                            style="background-color: green; color: white; padding: 10px 20px; border: none; border-radius: 5px;">
                            Kipas Menyala
                        </button>
                    </div><br>
                    <div style="text-align: center">
                        <label>Auto</label><br>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-toggle="modal"
                            data-target="#greenhouseadjusttable">
                            Settings
                        </button>

                        <!-- Modal -->
                        <div class="modal fade" id="greenhouseadjusttable" tabindex="-1" role="dialog"
                            aria-labelledby="greenhouseadjusttableLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="greenhouseadjusttableLabel">Settings</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div
                                            style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                            <div>
                                                <label for="minTemp">Minimal Suhu: </label>
                                                <input type="number" id="minTemp" value="0"
                                                    style="width: 100px; border: none; padding: 5px;" />
                                            </div>
                                            <br>
                                            <div>
                                                <label for="maxTemp">Maksimal Suhu: </label>
                                                <input type="number" id="maxTemp" value="100"
                                                    style="width: 100px; border: none; padding: 5px;" />
                                            </div>
                                        </div>

                                        <div class="result" id="result"></div>

                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary mb-2" type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Close</button>
                                        <button class="btn btn-primary mb-2" type="button"
                                            onclick="setTemperature()">Set Suhu</button>
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
        </div>
        <div class="col-xl-6 col-md-6 mb-4">
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
                            <div class="row">
                                <div class="col-2" style=""></canvas></div>
                                <div class="col-8"><canvas id="myChart"></div>
                                <div class="col-2"></div>
                            </div>
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
                    <div class="chart-area ">
                        <canvas id="myChart"></canvas>
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

<script>
    const xValues = [100, 200, 300, 400, 500, 600, 700];
    new Chart("myChart", {
        type: "line",
        data: {
            labels: xValues,
            datasets: [{
                label: 'Suhu',
                data: [860, 1140, 1060, 1060, 1070, 1110],
                borderColor: "red",
                fill: true
            }, {
                label: 'Kelembapan',
                data: [1600, 1700, 1700, 1900, 2000, 2700],
                borderColor: "green",
                fill: false
            }, {
                label: 'Data asal',
                data: [300, 700, 2000, 5000, 6000, 5500],
                borderColor: "blue",
                fill: false
            }]
        },
        options: {
            legend: {
                display: true
            }
        }
    });

</script>
@endsection
