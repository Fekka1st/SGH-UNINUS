@extends('layout.master')
@section('title','Report Data')
@section('css')
@endsection


@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Management Report Data Sensor</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary"></h6>
        </div>
        <div class="card-body" id="body">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Create Report Data
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
                                    <label for="device_type">Select Device:</label>
                                    <select name="device_type" id="device_type" class="form-control">
                                        <option value="hydroponik">Hydroponik</option>
                                        <option value="aeroponik">Aeroponik</option>
                                        <option value="greenhouse">Greenhouse</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="time_range">Time Span:</label>
                                    <select name="time_range" id="time_range" class="form-control">
                                        <option value="1 Hari">1 Day</option>
                                        <option value="1 Minggu">1 Week</option>
                                        <option value="1 Bulan">1 Month</option>
                                        <option value="3 Bulan">3 Month</option>
                                        <option value="6 Bulan">6 Month</option>
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
