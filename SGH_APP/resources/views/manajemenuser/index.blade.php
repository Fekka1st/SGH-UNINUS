@extends('layout.master')
@section('title','Aerophonik')

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />
<meta name="csrf-token" content="{{ csrf_token() }}">
@endsection

@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">Management User</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">List User</h6>
        </div>
        <div class="card-body" id="body">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                Add Data
            </button>
            <div class="col-12" style="overflow-x:auto;">
                <table id="myTable" class="display">
                    <thead>
                        <tr>
                            <th width=3%>No</th>
                            <th width=15%>Photo</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($user as $data => $users)
                        <tr id="index_{{ $users->id }}">
                            <td>{{$data + 1}}</td>
                            <td><img src="{{$users->foto_profile}}" class="img-thumbnail rounded" alt=""></td>
                            <td>{{$users->name}}</td>
                            <td>{{$users->email}}</td>
                            <td class="text-center">
                                <a href="javascript:void(0)" id="btn-edit-post" data-id="{{ $users->id }}"
                                    class="btn btn-primary ">Edit</a>
                                @method('DELETE')
                                <a href="{{ route('manajemen_user.destroy', $users->id) }}" class="btn btn-danger"
                                    data-confirm-delete="true">Delete</a>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>

        </div>
    </div>

</div>
@include('manajemenuser.tambah')
@include('manajemenuser.update')

@endsection

@section('script')
<script>
    $(document).ready(function () {
        $('#myTable').DataTable();
    });

    $(document).on('click', '#btn-edit-post', function () {
        var id = $(this).data('id');
        $.get('manajemen_user/' + id + '/edit', function (data) {
            $('#user_id').val(data.id);
            $('#name_up').val(data.name);
            $('#email_up').val(data.email);
            $('#password_up').val(data.password);
            $('#updateForm').attr('action', '/manajemen_user/' + data.id)
            $('#editModal').modal('show');
        });
    });

</script>

<script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection
