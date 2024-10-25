@extends('layout.master')
@section('title','GreenHouse')

@section('css')
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Manajemen User</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List User</h6>
        </div>
        <div class="card-body" id="body">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Cari Data
            </button>
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Genereted Report</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form id="reportForm" method="POST" action="{{ route('generateReport') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="device_type">Pilih Perangkat:</label>
                                    <select name="device_type" id="device_type" class="form-control">
                                        <option value="hydroponik">Hydroponik</option>
                                        <option value="aeroponik">Aeroponik</option>
                                        <option value="greenhouse">Greenhouse</option>
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="time_range">Rentang Waktu:</label>
                                    <select name="time_range" id="time_range" class="form-control">
                                        <option value="1 Hari">1 Hari</option>
                                        <option value="1 Minggu">1 Minggu</option>
                                        <option value="1 Bulan">1 Bulan</option>
                                        <option value="3 Bulan">3 Bulan</option>
                                        <option value="6 Bulan">6 Bulan</option>
                                    </select>
                                </div>



                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                            <button type="submit" class="btn btn-primary">Generate</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <table id="reportTable" class="table table-striped">
                <thead>
                    <tr>

                    </tr>
                </thead>
                <tbody>
                    <tr>

                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</div>
@endsection

@section('script')
<script>
    $(document).ready(function () {
        // Handle form submission
        $('#reportForm').on('submit', function (e) {
            e.preventDefault();
            let deviceType = $('#device_type').val();
            let timeRange = $('#time_range').val();
            $.ajax({
                url: "{{ route('generateReport') }}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    device_type: deviceType,
                    time_range: timeRange
                },
                success: function (data) {
                    if (data.message) {
                        alert(data.message); // Tampilkan pesan jika data tidak ditemukan
                    } else {
                        renderTable(data, deviceType); // Render data ke dalam tabel
                    }
                },
                error: function () {
                    alert('Terjadi kesalahan saat mengolah data.');
                }
            });
        });

        // Function untuk render tabel sesuai dengan device_type
        function renderTable(data, deviceType) {
            let tableHeaders = '';
            let tableRows = '';

            // Sesuaikan header tabel berdasarkan device_type
            if (deviceType === 'hydroponik') {
                tableHeaders = `
                    <tr>
                        <th>Waktu</th>
                        <th>Rata-rata Suhu</th>
                        <th>Rata-rata pH</th>
                        <th>Rata-rata TDS</th>
                        <th>Rata-rata Volume Air</th>
                        <th>Rata-rata Suhu Air</th>
                    </tr>`;
            } else if (deviceType === 'aeroponik') {
                tableHeaders = `
                    <tr>
                        <th>Waktu</th>
                        <th>Rata-rata Suhu</th>
                        <th>Rata-rata pH</th>
                        <th>Rata-rata TDS</th>
                        <th>Rata-rata Kelembaban</th>
                        <th>Rata-rata Volume Air</th>
                    </tr>`;
            } else if (deviceType === 'greenhouse') {
                tableHeaders = `
                    <tr>
                        <th>Waktu</th>
                        <th>Rata-rata Suhu</th>
                        <th>Rata-rata Kelembaban</th>
                        <th>Rata-rata CO2</th>
                        <th>Rata-rata Intensitas Cahaya</th>
                        <th>Rata-rata Konsumsi Air</th>
                    </tr>`;
            }

            // Generate rows dari data yang dikembalikan
            data.forEach(function (row) {
                tableRows += `
                    <tr>
                        <td>${row.hour_block}</td>
                        <td>${row.avg_suhu || '-'}</td>
                        <td>${row.avg_ph || '-'}</td>
                        <td>${row.avg_tds || '-'}</td>
                        <td>${row.avg_volume_air || '-'}</td>
                        ${row.avg_suhu_air ? `<td>${row.avg_suhu_air}</td>` : ''}
                        ${row.avg_humidity ? `<td>${row.avg_humidity}</td>` : ''}
                        ${row.avg_co2 ? `<td>${row.avg_co2}</td>` : ''}
                        ${row.avg_light_intensity ? `<td>${row.avg_light_intensity}</td>` : ''}
                        ${row.avg_water_consumption ? `<td>${row.avg_water_consumption}</td>` : ''}
                    </tr>`;
            });

            // Update tabel
            $('#reportTable thead').html(tableHeaders);
            $('#reportTable tbody').html(tableRows);

            // Inisialisasi DataTables.js setelah data di-render
            $('#reportTable').DataTable();
        }
    });

</script>
@endsection
