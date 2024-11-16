<div>
    <div class="container-fluid" wire:poll="refreshData">
        <div class="row">
            @if ($status == 1)
            <h1 class="h2 mb-2 text-gray-800"><b>Hydroponic </b></h1>
            <h2 class="h4 mt-2 ml-3">Status Device : </h2>
            <h2 class="h4 mt-2 ml-1" style="color:#57F000"><b>ONLINE</b></h2>
            @else
            <h1 class="h2 mb-2 text-gray-800"><b>Hydroponic </b></h1>
            <h2 class="h4 mt-2 ml-3">Status Device : </h2>
            <h2 class="h4 mt-2 ml-1" style="color:#FE3839"><b>OFFLINE - Last seen: {{ $lastSeen }}</b></h2>
            @endif
        </div>
        <div class="row">
            <div class="col-xl-4 col-md-6 mb-4">
                <div class="card border-left-primary shadow h-100 py-2">
                    <div class="card-body">
                        <div class="row no-gutters align-items-center">
                            <div class="col mr-2">
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                    Water pH </div>
                                <div>
                                    {{$data->ph_air}} pH
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
                                    Nutrition </div>
                                <div>
                                    {{$data->tds}} PPM
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
                                    Water Temperature </div>
                                <div>
                                    {{$data->suhu_air}} °C
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
                                    Water Level </div>
                                <div>
                                    {{$data->volume_air}} Cm
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
                                    Water Flow </div>
                                <div>
                                    {{$data->laju_air}} m/s
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
                                    Panel Temp </div>
                                <div> {{$data->panel_temp}} °C </div>
                            </div>
                            <div class="col-auto">
                                <i class="fas fa-laptop-house"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if ($status == 1)
        <div class="row">
            <div class="col-xl-12 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"
                            style="text-align: center; margin: 2%; width: 100%">Controlling Hydroponic</h6>
                    </div>
                    @if ($device->mode == 1)
                    <div class="margin-top: 4" style="text-align: center; margin: 2%; width: 96%">
                        <button class="btn btn-primary" type="submit"
                            style="border: 0px solid #4e73df; padding: 0px; width: 200px; text-align: center; background-color: #4e73df; color: #ffffff; cursor: pointer;">
                            <img src="{{asset('asset/img/animasi/Animation - Setiing2.gif')}}" alt="Gambar 2"
                                style="width: 100px; height: 100px">
                            <h5 style="color: rgb(255, 255, 255); text-align: center; width: 96%">Auto Mode:
                                On</h5>
                        </button>
                    </div>
                    @else
                    <div class="container" wire:poll="pump">
                        <div class="d-flex flex-wrap justify-content-center align-items-center;" style="margin: 2%">
                            <div class="m-3">
                                <button wire:click="togglePump('Pompa_PHUP')" class="btn btn-primary"
                                    style="border: 1px solid #4e73df; padding: 17px; width: 180px;">
                                    <h5 style="color: white;">Water pH Up</h5>
                                    <div class="col-auto">
                                        <i class="fas fa-tint"></i>
                                        <h6 class="{{ $pump_ph_up_status ? 'text-success' : 'text-danger' }}">
                                            <b>{{ $pump_ph_up_status ? 'ON' : 'OFF' }}</b>
                                        </h6>
                                    </div>
                                </button>
                            </div>

                            <div class="m-3">
                                <button wire:click="togglePump('Pompa_PHDOWN')" class="btn btn-primary"
                                    style="border: 1px solid #4e73df; padding: 17px; width: 185px;">
                                    <h5 style="color: white;">Water pH Down</h5>
                                    <div class="col-auto">
                                        <i class="fas fa-tint"></i>
                                        <h6 class="{{ $pump_ph_down_status ? 'text-success' : 'text-danger' }}">
                                            <b>{{ $pump_ph_down_status ? 'ON' : 'OFF' }}</b>
                                        </h6>
                                    </div>
                                </button>
                            </div>

                            <div class="m-3">
                                <button wire:click="togglePump('Pompa_Nutrisi')" class="btn btn-primary"
                                    style="border: 1px solid #4e73df; padding: 17px; width: 185px;">
                                    <h5 style="color: white;">AB Mix</h5>
                                    <div class="col-auto">
                                        <i class="fab fa-nutritionix"></i>
                                        <h6 class="{{ $ab_mix_status ? 'text-success' : 'text-danger' }}">
                                            <b>{{ $ab_mix_status ? 'ON' : 'OFF' }}</b>
                                        </h6>
                                    </div>
                                </button>
                            </div>

                            {{-- <div class="m-3">
                                <button wire:click="togglePump('Pompa_TankiAir')" class="btn btn-primary"
                                    style="border: 1px solid #4e73df; padding: 17px; width: 180px;">
                                    <h5 style="color: white;">Water Level Up</h5>
                                    <div class="col-auto">
                                        <i class="fas fa-water"></i>
                                        <h6 class="{{ $water_level_status ? 'text-success' : 'text-danger' }}">
                                            <b>{{ $water_level_status ? 'ON' : 'OFF' }}</b>
                                        </h6>
                                    </div>
                                </button>
                            </div> --}}
                        </div>
                    </div>
                    @endif

                    <div class="row">
                        <div class="container text-center mb-4">
                            <div class="row justify-content-center">
                                <div class="col-6 col-md-2 mb-2">
                                    @if($device->mode == 1)
                                    <button wire:click="changemode('{{$device->id}}')"
                                        class="btn btn-primary btn-sm w-100" type="submit">Auto</button>
                                    @else
                                    <button wire:click="changemode('{{$device->id}}')"
                                        class="btn btn-primary btn-sm w-100" type="submit">Manual</button>
                                    @endif
                                </div>
                                <div class="col-6 col-md-2 mb-2">
                                    <button type="button" class="btn btn-primary btn-sm w-100"
                                        wire:click="openModal">Setting</button>
                                </div>
                            </div>
                        </div>
                        <div class="result" id="result"></div>
                    </div>
                </div>
            </div>
        </div>
        @else
        <div class="row">
            <div class="col-xl-12 col-lg-7">
                <div class="card shadow mb-4">
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"
                            style="text-align: center; margin: 2%; width: 100%">Controlling Hydroponic</h6>
                    </div>
                    <div class="margin-top: 4" style="text-align: center; margin: 2%; width: 96%">
                        <h2 class="text-danger"><b>Control Cannot be used, Because the Device is Offline</b></h2>
                    </div>
                </div>
            </div>
        </div>
        @endif


        {{-- modal --}}
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
                                    <label for="minTemp" style="width: 123px;">Water PH Up:
                                    </label>
                                    <input type="number" name="Limit_ph_min" step="0.1"  wire:model="Limit_ph_min"
                                        value="{{ $setting['Limit_ph_min'] }}"
                                        style="width: 80px; border: none; padding: 5px;" />
                                    <label for="maxTemp">PH </label>
                                </div>
                                <div>
                                    <label for="maxTemp">Water PH Down: </label>
                                    <input type="number" name="Limit_ph_max" step="0.1" wire:model="Limit_ph_max"
                                        value="{{ $setting['Limit_ph_max'] }}"
                                        style="width: 80px; border: none; padding: 5px;" />
                                    <label for="maxTemp">PH </label>
                                </div>
                                <br>
                                <div>
                                    <label for="minTemp" style="width: 125px;">Nutrition Up:
                                    </label>
                                    <input type="number" name="Limit_nutrisi_min"  wire:model="Limit_nutrisi_min"
                                        value="{{ $setting['Limit_nutrisi_min'] }}"
                                        style="width: 70px; border: none; padding: 5px;" />
                                    <label for="maxTemp">PPM </label>
                                </div>
                                <div>
                                    <label for="maxTemp" style="width: 125px;">Nutrition
                                        Down: </label>
                                    <input type="number" name="Limit_nutrisi_max"  wire:model="Limit_nutrisi_max"
                                        value="{{ $setting['Limit_nutrisi_max'] }}"
                                        style="width: 70px; border: none; padding: 5px;" />
                                    <label for="maxTemp">PPM </label>
                                </div>
                                <br>
                                <div>
                                    <label for="maxTemp" style="width: 126px;">Water Level:
                                    </label>
                                    <input type="number" name="tangki_air"  wire:model="tangki_air"  value="{{ $setting['tangki_air'] }}"
                                        style="width: 79px; border: none; padding: 5px;" />
                                    <label for="maxTemp">Cm </label>
                                </div>
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



        <div class="row">
            <div class="col-xl-12 col-lg-7">
                <div class="card shadow mb-4">
                    <div class="card-header py-3">
                        <h6 class="m-0 font-weight-bold text-primary"
                            style="text-align: center; margin: 2%; width: 100%">Chart Monitoring</h6>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-xl-6 col-lg-7">
                            <div class="card shadow mb-4">
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"
                                        style="text-align: center; margin: 2%; width: 100%">Water
                                        Temperature</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="suhu" wire:ignore></canvas>
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
                                        style="text-align: center; margin: 2%; width: 100%">Water Flow</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area" wire:ignore>
                                        <canvas id="laju"></canvas>
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
                                        style="text-align: center; margin: 2%; width: 100%">Water PH</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area" wire:ignore>
                                        <canvas id="ph"></canvas>
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
                                        style="text-align: center; margin: 2%; width: 100%">Nutrition</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area" wire:ignore>
                                        <canvas id="ppm"></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary"
                                        style="text-align: center; margin: 2%; width: 100%">Water Level</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area">
                                        <canvas id="tangki" wire:ignore></canvas>
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
            lajuData = [],
            phData = [],
            tdsData = [],
            volumeData = [];
        Livewire.on('updateSensorData', (sensorData) => {
            console.log(sensorData); // Cek kembali struktur di konsol

            if (Array.isArray(sensorData) && sensorData.length > 0) {
                const data = sensorData[0]; // Akses elemen pertama dari array
                // Update suhu data dan chart
                suhuData.push(data.suhu_air);
                if (suhuData.length > 10) suhuData.shift();
                suhuChart.data.labels.push(new Date().toLocaleTimeString());
                if (suhuChart.data.labels.length > 10) suhuChart.data.labels.shift();
                suhuChart.update();

                // Update laju data dan chart
                lajuData.push(data.laju_air);
                if (lajuData.length > 10) lajuData.shift();
                lajuChart.data.labels.push(new Date().toLocaleTimeString());
                if (lajuChart.data.labels.length > 10) lajuChart.data.labels.shift();
                lajuChart.update();

                // Update pH data dan chart
                phData.push(data.ph_air);
                if (phData.length > 10) phData.shift();
                phChart.data.labels.push(new Date().toLocaleTimeString());
                if (phChart.data.labels.length > 10) phChart.data.labels.shift();
                phChart.update();

                // Update TDS data dan chart
                tdsData.push(data.tds);
                if (tdsData.length > 10) tdsData.shift();
                tdsChart.data.labels.push(new Date().toLocaleTimeString());
                if (tdsChart.data.labels.length > 10) tdsChart.data.labels.shift();
                tdsChart.update();

                // Update volume data dan chart
                volumeData.push(data.volume_air);
                if (volumeData.length > 10) volumeData.shift();
                volumeChart.data.labels.push(new Date().toLocaleTimeString());
                if (volumeChart.data.labels.length > 10) volumeChart.data.labels.shift();
                volumeChart.update();
            } else {
                console.warn("Data sensor tidak sesuai atau kosong.");
            }
        });



        // Inisialisasi semua chart
        var ctxSuhu = document.getElementById('suhu').getContext('2d');
        var ctxLaju = document.getElementById('laju').getContext('2d');
        var ctxPh = document.getElementById('ph').getContext('2d');
        var ctxTds = document.getElementById('ppm').getContext('2d');
        var ctxVolume = document.getElementById('tangki').getContext('2d');

        var suhuChart = new Chart(ctxSuhu, {
            type: 'line',
            data: {
                labels: [],
                datasets: [{
                    label: 'Water Temperature',
                    data: suhuData,
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1,
                    fill: {
                        target: 'origin',
                        above: 'rgba(75, 192, 192, 0.2)' // Warna bayangan
                    },
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            },
        });

        var lajuChart = new Chart(ctxLaju, {
            type: 'line',
            data: {
                labels: [],
                datasets: [{
                    label: 'Water Flow',
                    data: lajuData,
                    backgroundColor: 'rgba(54, 162, 235, 0.2)',
                    borderColor: 'rgba(54, 162, 235, 1)',
                    borderWidth: 1,
                    fill: {
                        target: 'origin',
                        above: 'rgb(215,236,251,0.2)' // Warna bayangan
                    },
                    tension: 0.4
                }]
            },
            options: {
                responsive: true,
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        var phChart = new Chart(ctxPh, {
            type: 'line',
            data: {
                labels: [],
                datasets: [{
                    label: 'Water pH',
                    data: phData,
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
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        var tdsChart = new Chart(ctxTds, {
            type: 'line',
            data: {
                labels: [],
                datasets: [{
                    label: 'Nutrition (TDS)',
                    data: tdsData,
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
                maintainAspectRatio: false,
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        var volumeChart = new Chart(ctxVolume, {
            type: 'line',
            data: {
                labels: [],
                datasets: [{
                    label: 'Water Level',
                    data: volumeData,
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
                maintainAspectRatio: false, //membuat chart menjadi flexible
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
<title>SGH | Hydroponik</title>
@endpush
