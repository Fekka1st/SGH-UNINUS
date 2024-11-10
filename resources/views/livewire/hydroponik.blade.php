<div>
    <div class="container-fluid" wire:poll="refreshData">

        <div class="row">
            @if ($device->status == 1)
            <h1 class="h2 mb-2 text-gray-800"><b>Hydroponic </b></h1>
            <h2 class="h4 mt-2 ml-3">Status Device : </h2>
            <h2 class="h4 mt-2 ml-1" style="color:#57F000"><b>ONLINE</b></h2>
            @else
            <h1 class="h2 mb-2 text-gray-800"><b>Hydroponic </b></h1>
            <h2 class="h4 mt-2 ml-3">Status Device : </h2>
            <h2 class="h4 mt-2 ml-1" style="color:#FE3839"><b>OFFLINE</b></h2>
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
                                    {{$data->suhu_air}} %
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
                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"> Room
                                    Panel Temp. </div>
                                <div> 30 °C </div>
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
                    <!-- Card Header - Dropdown -->
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary"
                            style="text-align: center; margin: 2%; width: 100%">Controlling Hydroponic</h6>
                    </div>
                    @if ($device->mode == 1) <div class="margin-top: 4"
                        style="text-align: center; margin: 2%; width: 96%">
                        <button class="btn btn-primary" type="submit"
                            style="border: 0px solid #4e73df; padding: 0px; width: 200px; text-align: center; background-color: #4e73df; color: #ffffff; cursor: pointer;">
                            <img src="{{asset('asset/img/animasi/Animation - Setiing2.gif')}}" alt="Gambar 2"
                                style="width: 100px; height: 100px">
                            <h5 style="color: rgb(255, 255, 255); text-align: center; width: 96%">Auto Mode:
                                On</h5>
                        </button>
                    </div>
                    @else
                    <div class="container" wire:poll="pump()">
                        <div class="d-flex flex-wrap justify-content-center align-items-center;" style="margin: 2%">
                            <div class="m-3">
                                <button wire:click="togglePump('Pompa_PHUP')" class="btn btn-primary" style="border: 1px solid #4e73df; padding: 5px; width: 150px;">
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
                                <button wire:click="togglePump('Pompa_PHDOWN')" class="btn btn-primary" style="border: 1px solid #4e73df; padding: 5px; width: 150px;">
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
                                <button wire:click="togglePump('Pompa_Nutrisi')" class="btn btn-primary" style="border: 1px solid #4e73df; padding: 5px; width: 150px;">
                                    <h5 style="color: white;">AB Mix</h5>
                                    <div class="col-auto">
                                        <i class="fab fa-nutritionix"></i>
                                        <h6 class="{{ $ab_mix_status ? 'text-success' : 'text-danger' }}">
                                            <b>{{ $ab_mix_status ? 'ON' : 'OFF' }}</b>
                                        </h6>
                                    </div>
                                </button>
                            </div>

                            <div class="m-3">
                                <button wire:click="togglePump('Pompa_TankiAir')" class="btn btn-primary" style="border: 1px solid #4e73df; padding: 5px; width: 150px;">
                                    <h5 style="color: white;">Water Level Up</h5>
                                    <div class="col-auto">
                                        <i class="fas fa-water"></i>
                                        <h6 class="{{ $water_level_status ? 'text-success' : 'text-danger' }}">
                                            <b>{{ $water_level_status ? 'ON' : 'OFF' }}</b>
                                        </h6>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="row">
                        <div class="container text-center mb-4">
                            <div class="row justify-content-center">
                                <div class="col-6 col-md-2 mb-2">
                                    <form action="{{ route('changeMode', $device->id) }}" method="POST" class="w-100"
                                        style="text-align: center; margin: 1%;">
                                        @csrf
                                        @if($device->mode == 1)
                                        <button class="btn btn-primary btn-sm w-100" type="submit">Mode: Auto</button>
                                        @else
                                        <button class="btn btn-primary btn-sm w-100" type="submit">Mode:Manual</button>
                                        @endif
                                    </form>
                                </div>
                                <div class="col-6 col-md-2 mb-2">
                                    <button type="button" class="btn btn-primary" wire:click="openModal">
                                        Open Setting
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModal" aria-hidden="true" wire:ignore.self>
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
                                        <form action="{{ route('Hydro.settings.update') }}" method="POST">
                                            @csrf <div
                                                style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
                                                <div>
                                                    <label for="minTemp" style="width: 123px;">Water PH Up:
                                                    </label>
                                                    <input type="number" name="Limit_ph_min" step="0.01"
                                                        value="{{ $setting['Limit_ph_min'] }}"
                                                        style="width: 80px; border: none; padding: 5px;" />
                                                    <label for="maxTemp">PH </label>
                                                </div>
                                                <div>
                                                    <label for="maxTemp">Water PH Down: </label>
                                                    <input type="number" name="Limit_ph_max" step="0.01"
                                                        value="{{ $setting['Limit_ph_max'] }}"
                                                        style="width: 80px; border: none; padding: 5px;" />
                                                    <label for="maxTemp">PH </label>
                                                </div>
                                                <br>
                                                <div>
                                                    <label for="minTemp" style="width: 125px;">Nutrition Up:
                                                    </label>
                                                    <input type="number" name="Limit_nutrisi_min"
                                                        value="{{ $setting['Limit_nutrisi_min'] }}"
                                                        style="width: 70px; border: none; padding: 5px;" />
                                                    <label for="maxTemp">PPM </label>
                                                </div>
                                                <div>
                                                    <label for="maxTemp" style="width: 125px;">Nutrition
                                                        Down: </label>
                                                    <input type="number" name="Limit_nutrisi_max"
                                                        value="{{ $setting['Limit_nutrisi_max'] }}"
                                                        style="width: 70px; border: none; padding: 5px;" />
                                                    <label for="maxTemp">PPM </label>
                                                </div>
                                                <br>
                                                <div>
                                                    <label for="maxTemp" style="width: 126px;">Water Level:
                                                    </label>
                                                    <input type="number" name="tangki_air"
                                                        value="{{ $setting['tangki_air'] }}"
                                                        style="width: 79px; border: none; padding: 5px;" />
                                                    <label for="maxTemp">Cm </label>
                                                </div>
                                            </div>
                                            <div class="result" id="result"></div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary mb-2" type="button"
                                                    class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                <button class="btn btn-primary mb-2" type="submit">Set</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="result" id="result"></div>
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
                                        <canvas id="laju" ></canvas>
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
                                        style="text-align: center; margin: 2%; width: 100%">Water pH</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-area" wire:ignore>
                                        <canvas id="Co²" ></canvas>
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
                                        <canvas id="ppm" ></canvas>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-7">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div
                                    class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                                    <h6 class="m-0 font-weight-bold text-primary"
                                        style="text-align: center; margin: 2%; width: 100%">Water Level</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body" >
                                    <div class="chart-area" >
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
        // Event untuk membuka modal
        Livewire.on('openModal', () => {
            $('#exampleModal').modal('show');
        });

        // Event untuk menutup modal
        Livewire.on('closeModal', () => {
            $('#exampleModal').modal('hide');
        });
    });
</script>

<script>
  document.addEventListener('livewire:init', () => {
    Livewire.on('updateSensorData', (sensorData) => {
        console.log(sensorData); // Cek kembali struktur di konsol

        // Ambil elemen pertama dari array sensorData untuk mengakses suhu_air
        if (Array.isArray(sensorData) && sensorData.length > 0) {
            const suhuAir = sensorData[0].suhu_air; // Akses suhu_air dari elemen pertama
            suhuData.push(suhuAir);
            if (suhuData.length > 10) suhuData.shift(); // Batasi jumlah data untuk performa

            // Update chart dengan data terbaru
            myChart.data.labels.push(new Date().toLocaleTimeString()); // Tambah label waktu saat data diterima
            if (myChart.data.labels.length > 10) myChart.data.labels.shift(); // Batasi jumlah label
            myChart.update();
        } else {
            console.warn("Data sensor tidak sesuai atau kosong.");
        }
    });

    // Inisialisasi chart suhu
    var ctx = document.getElementById('suhu').getContext('2d');
    var suhuData = [];
    var myChart = new Chart(ctx, {
        type: 'line',
        data: {
            labels: [], 
            datasets: [{
                label: 'Water Temperature',
                data: suhuData,
                backgroundColor: 'rgba(75, 192, 192, 0.2)',
                borderColor: 'rgba(75, 192, 192, 1)',
                borderWidth: 1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });
});
</script>
{{-- <script>
    document.addEventListener('livewire:load', () => {
        let suhuData = [], lajuData = [], co2Data = [], ppmData = [], tangkiData = [];
        let suhuChart, lajuChart, co2Chart, ppmChart, tangkiChart;

        // Fungsi untuk menginisialisasi chart
        function initializeChart(ctx, label, color) {
            return new Chart(ctx, {
                type: 'line',
                data: {
                    labels: [],
                    datasets: [{
                        label: label,
                        data: [],
                        backgroundColor: color,
                        borderColor: color,
                        fill: false,
                        tension: 0.1
                    }]
                },
                options: {
                    responsive: true,
                    scales: {
                        x: {
                            type: 'realtime',
                            realtime: {
                                delay: 2000,
                                onRefresh: function(chart) {
                                    chart.data.labels.push(new Date().toLocaleTimeString());
                                }
                            }
                        },
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        }

        // Fungsi untuk memperbarui chart
        function updateChart(chart, data, value) {
            data.push(value);
            if (data.length > 10) data.shift(); // Batasi jumlah data untuk performa
            chart.data.datasets[0].data = data;
            chart.update();
        }

        // Inisialisasi semua chart
        suhuChart = initializeChart(document.getElementById('suhu').getContext('2d'), 'Water Temperature', 'rgba(75, 192, 192, 1)');
        lajuChart = initializeChart(document.getElementById('laju').getContext('2d'), 'Water Flow', 'rgba(54, 162, 235, 1)');
        co2Chart = initializeChart(document.getElementById('Co2').getContext('2d'), 'Water pH', 'rgba(255, 99, 132, 1)');
        ppmChart = initializeChart(document.getElementById('ppm').getContext('2d'), 'Nutrition', 'rgba(153, 102, 255, 1)');
        tangkiChart = initializeChart(document.getElementById('tangki').getContext('2d'), 'Water Level', 'rgba(255, 159, 64, 1)');

        // Event listener untuk menerima data dari Livewire dan memperbarui chart
        Livewire.on('updateSensorData', (sensorData) => {
            updateChart(suhuChart, suhuData, sensorData.suhu_air);
            updateChart(lajuChart, lajuData, sensorData.laju_air);
            updateChart(co2Chart, co2Data, sensorData.ph_air);
            updateChart(ppmChart, ppmData, sensorData.tds);
            updateChart(tangkiChart, tangkiData, sensorData.volume_air);
        });
    });
</script> --}}
@endpush
