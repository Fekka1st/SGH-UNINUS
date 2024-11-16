<div>
    <div class="container-fluid" wire:poll="refreshData">
        <h1 class="h3 mb-2 text-gray-800">Smart Room Greenhouse</h1>

        <div class="row">
            <!-- Suhu Card -->
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Temperature</div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Temperature : 1</h5>
                                                <h6 class="card-subtitle mb-2">{{$data->suhu_1}}°C</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Temperature : 2</h5>
                                                <h6 class="card-subtitle mb-2">{{$data->suhu_2}}°C</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Temperature : 3</h5>
                                                <h6 class="card-subtitle mb-2">{{$data->suhu_3}}°C</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Temperature : 4</h5>
                                                <h6 class="card-subtitle mb-2">{{$data->suhu_4}}°C</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Temperature : 5</h5>
                                                <h6 class="card-subtitle mb-2">{{$data->suhu_5}}°C</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Temperature : 6</h5>
                                                <h6 class="card-subtitle mb-2">{{$data->suhu_6}}°C</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Temperature : 7</h5>
                                                <h6 class="card-subtitle mb-2">{{$data->suhu_7}}°C</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="card bg-primary">
                                            <div class="card-body text-center">
                                                <h5 class="card-title text-white">Average Temp.</h5>
                                                <h6 class="card-subtitle mb-2 text-white">{{$data->suhu_avg}}°C</h6>
                                            </div>
                                        </div>
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


            <!-- Kelembapan Card -->
            <div class="col-xl-6 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Relative Humidity
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Humidity : 1</h5>
                                                <h6 class="card-subtitle mb-2">{{$data->kelembaban_1}}%</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Humidity : 2</h5>
                                                <h6 class="card-subtitle mb-2">{{$data->kelembaban_2}}%</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Humidity : 3</h5>
                                                <h6 class="card-subtitle mb-2">{{$data->kelembaban_3}}%</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Humidity : 4</h5>
                                                <h6 class="card-subtitle mb-2">{{$data->kelembaban_4}}%</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Humidity : 5</h5>
                                                <h6 class="card-subtitle mb-2">{{$data->kelembaban_5}}%</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Humidity : 6</h5>
                                                <h6 class="card-subtitle mb-2">{{$data->kelembaban_6}}%</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h5 class="card-title">Humidity : 7</h5>
                                                <h6 class="card-subtitle mb-2">{{$data->kelembaban_7}}%</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <div class="card bg-primary">
                                            <div class="card-body text-center">
                                                <h5 class="card-title text-white">Average RH</h5>
                                                <h6 class="card-subtitle mb-2 text-white">{{$data->kelembaban_avg}}%
                                                </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-wind"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- CO2 Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">

                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    CO2
                                </div>
                                <div>
                                    {{$data->co2}} PPM
                                </div>

                            </div>
                            <div class="col-auto">
                                <i class="fas fa-spa"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Intensitas Cahaya Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Light Intensity
                                </div>
                                <div>{{$data->intensitas}} lx</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-lightbulb"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- Pemakaian Air Card -->
            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Water Level</div>
                                <div>{{$data->water_level}}</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-water"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xl-3 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Room Panel Temp
                                </div>
                                <div>{{$data->panel_temp}}°C</div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-laptop-house"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


        <div class="row">
            <div class="col-xl-12 col-lg-7">
                <div class="card shadow mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"
                            style="text-align: center; margin: 2%; width: 100%">Controlling Green House</h6>
                    </div>
                    <div class="container" wire:poll="fan">
                        <div class="d-flex flex-wrap justify-content-center align-items-center;" style="margin: 2%">
                            <div class="m-3">
                                <button class="btn btn-primary" wire:click="toggleFan('Cooling_System')"
                                    style="border: 1px solid #4e73df; padding: 17px; width: 180px;">
                                    <h5 style="color: white;">Cooling Sistem</h5>
                                    <div class="col-auto">
                                        <i class="fas fa-tint"></i>
                                        <h6 class="{{ $fan_status ? 'text-success' : 'text-danger' }}">
                                            <b>{{ $fan_status ? 'ON' : 'OFF' }}</b>
                                        </h6>
                                        </h6>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="container text-center mb-4">
                            <div class="row justify-content-center">
                                <div class="col-6 col-md-2 mb-2">
                                    <button type="button" class="btn btn-primary btn-sm w-100"
                                        wire:click="openModal">Setting</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- canva --}}
    <div class="row">
        <div class="col-xl-12 col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary"
                        style="text-align: center; margin: 2%; width: 100%">Chart Monitoring</h6>
                </div><br>
                <div class="row">
                    <div class="col-xl-6 col-lg-6">
                        <div class="card shadow mb-4">
                            <div
                                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary"
                                    style="text-align: center; margin: 2%; width: 100%">(Temperature and Humidity)</h6>
                            </div>
                            <div class="card-body">
                                <div class="chart-area"wire:ignore>
                                    <canvas id="myChart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-7">
                        <div class="card shadow mb-4">
                            <div
                                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">

                                <h6 class="m-0 font-weight-bold text-primary"
                                    style="text-align: center; margin: 2%; width: 100%">Intesitas Cahaya</h6>

                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area" wire:ignore>
                                    <canvas id="cahaya"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-7">
                        <div class="card shadow mb-4">
                            <div
                                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary"
                                    style="text-align: center; margin: 2%; width: 100%">Water Level</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area" wire:ignore>
                                    <canvas id="waterlevel"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-xl-6 col-lg-7">
                        <div class="card shadow mb-4">
                            <!-- Card Header - Dropdown -->
                            <div
                                class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                <h6 class="m-0 font-weight-bold text-primary"
                                    style="text-align: center; margin: 2%; width: 100%">CO₂</h6>
                            </div>
                            <!-- Card Body -->
                            <div class="card-body">
                                <div class="chart-area" wire:ignore>
                                    <canvas id="co2"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModal"
        aria-hidden="true" wire:ignore.self>
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="greenhouseadjusttableLabel">Settings
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form wire:submit.prevent="update">
                        <div
                            style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                            <div>
                                <label for="minTemp" style="width: 123px;">Cooling Active:
                                </label>
                                <input type="number" name="Cooling_Sistem_Active" step="1"
                                    wire:model="Cooling_Sistem_Active" value="{{ $setting['Cooling_Sistem_Active'] }}"
                                    style="width: 80px; border: none; padding: 5px;" />
                                <label for="">Minute</label>
                            </div>
                            <div>
                                <label for="maxTemp">Cooling Inactive: </label>
                                <input type="number" name="Cooling_Sistem_Inactive" step="1"
                                    wire:model="Cooling_Sistem_Inactive"
                                    value="{{ $setting['Cooling_Sistem_Inactive'] }}"
                                    style="width: 80px; border: none; padding: 5px;" />
                                <label for="">Minute</label>
                            </div>
                            <br>

                        </div>
                        <div class="result" id="result"></div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary mb-2" type="button" class="btn btn-secondary"
                                wire:click="closeModal()">Close</button>
                            <button class="btn btn-primary mb-2" type="submit">Set</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>






@push('script')
<script>
    document.addEventListener('livewire:init', function () {
        Livewire.on('show-sweetalert', (notifikasi) => {
            const event = notifikasi[0];
            const Toast = Swal.mixin({
                toast: true,
                position: "top-end",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
                didOpen: (toast) => {
                    toast.onmouseenter = Swal.stopTimer;
                    toast.onmouseleave = Swal.resumeTimer;
                }
            });
            Toast.fire({
                icon: event.type,
                title: event.type === 'success' ? 'Berhasil!' : 'Peringatan!',
                text: event.message,
                showConfirmButton: false,
                timer: 3000
            });
        });
    });

</script>
<script>
    document.addEventListener('livewire:init', function () {
        Livewire.on('openModal', () => {
            $('#exampleModal').modal('show');
        });
        Livewire.on('closeModal', () => {
            $('#exampleModal').modal('hide');
        });
    });

</script>

<script>
    document.addEventListener('livewire:init', () => {
        var suhuData = [],
            kelemababanData = [],
            intensitasData = [],
            waterleveData = [],
            co2Data = [];
        Livewire.on('updateSensorData', (sensorData) => {
            console.log(sensorData);

            if (Array.isArray(sensorData) && sensorData.length > 0) {
                const data = sensorData[0];
                suhuData.push(data.suhu_air);
                kelemababanData.push(data.kelembaban);
                if (kelemababanData.length > 10) kelemababanData.shift();
                if (suhuData.length > 10) suhuData.shift();
                suhuChart.data.labels.push(new Date().toLocaleTimeString());
                if (suhuChart.data.labels.length > 10) suhuChart.data.labels.shift();
                suhuChart.update();

                // Update pH data dan chart
                intensitasData.push(data.intensitas_cahaya);
                if (intensitasData.length > 10) intensitasData.shift();
                intensitasChart.data.labels.push(new Date().toLocaleTimeString());
                if (intensitasChart.data.labels.length > 10) intensitasChart.data.labels.shift();
                intensitasChart.update();

                // Update TDS data dan chart
                co2Data.push(data.co2);
                if (co2Data.length > 10) co2Data.shift();
                co2Chart.data.labels.push(new Date().toLocaleTimeString());
                if (co2Chart.data.labels.length > 10) co2Chart.data.labels.shift();
                co2Chart.update();

                // Update volume data dan chart
                waterleveData.push(data.water_level);
                if (waterleveData.length > 10) waterleveData.shift();
                waterChart.data.labels.push(new Date().toLocaleTimeString());
                if (waterChart.data.labels.length > 10) waterChart.data.labels.shift();
                waterChart.update();
            } else {
                console.warn("Data sensor tidak sesuai atau kosong.");
            }
        });

        var ctxSuhu = document.getElementById('myChart').getContext('2d');
        var intensitasctx = document.getElementById('cahaya').getContext('2d');
        var co2ctx = document.getElementById('co2').getContext('2d');
        var waterctx = document.getElementById('waterlevel').getContext('2d');

        var suhuChart = new Chart(ctxSuhu, {
            type: 'line',
            data: {
                labels: [],
                datasets: [{
                        label: 'Water Temperature',
                        data: suhuData,
                        backgroundColor: 'rgba(255, 159, 64, 0.2)',
                        borderColor: 'rgba(255, 159, 64, 1)',
                        borderWidth: 1,
                        fill: {
                            target: 'origin',
                            above: 'rgb(255,236,217,0.2)' // Warna bayangan
                        },
                        tension: 0.4
                    },
                    {
                        label: 'Humadity',
                        data: kelemababanData,
                        backgroundColor: 'rgba(75, 192, 192, 0.2)',
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 1,
                        fill: {
                            target: 'origin',
                            above: 'rgba(75, 192, 192, 0.2)' // Warna bayangan
                        },
                        tension: 0.4
                    },

                ]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,//membuat chart menjadi flexible
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        });

        var intensitasChart = new Chart(intensitasctx, {
            type: 'line',
            data: {
                labels: [],
                datasets: [{
                    label: 'Water pH',
                    data: intensitasData,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1,
                    fill: {
                        target: 'origin',
                        above: 'rgb(255,224,230,0.2)' // Warna bayangan
                    },
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,//membuat chart menjadi flexible
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        var co2Chart = new Chart(co2ctx, {
            type: 'line',
            data: {
                labels: [],
                datasets: [{
                    label: 'Nutrition (TDS)',
                    data: co2Data,
                    backgroundColor: 'rgba(153, 102, 255, 0.2)',
                    borderColor: 'rgba(153, 102, 255, 1)',
                    borderWidth: 1,
                    fill: {
                        target: 'origin',
                        above: 'rgb(235,224,255,0.2)' // Warna bayangan
                    },
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,//membuat chart menjadi flexible
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        var waterChart = new Chart(waterctx, {
            type: 'line',
            data: {
                labels: [],
                datasets: [{
                    label: 'Water Level',
                    data: waterleveData,
                    backgroundColor: 'rgba(255, 159, 64, 0.2)',
                    borderColor: 'rgba(255, 159, 64, 1)',
                    borderWidth: 1,
                    fill: {
                        target: 'origin',
                        above: 'rgb(255,236,217,0.2)' // Warna bayangan
                    },
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,//membuat chart menjadi flexible
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    });
</script>

@endpush


@push('title')
<title>SGH | GreenHouse</title>
@endpush
