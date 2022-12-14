@extends('layouts.adminmaster')
@section('title', 'Pendanaan')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Pendanaan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Pendanaan</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- Small boxes (Stat box) -->
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h3 class="card-title">Data table of Pendanaan</h3>
                        <a href="{{ route('pendanaan.create') }}" class="btn btn-sm btn-success"><i
                                class="fas fa-plus"></i>
                            Create</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="table-dana" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Daftar Ads</th>
                                <th>Tanggal Cek Saldo</th>
                                <th>Jam Cek Saldo</th>
                                <th>Jumlah Saldo</th>
                                <th>Tanggal Top Up</th>
                                <th>Jam Top Up</th>
                                <th>Jumlah Top Up</th>
                                <th>Jumlah Setelah Top Up</th>
                                <th>Status Iklan</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pendanaan as $dana)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $dana->daftarAds }}</td>
                                    <td>{{ $dana->tanggalCekSaldo }}</td>
                                    <td>{{ $dana->jamCekSaldo }}</td>
                                    <td>{{ $dana->jumlahSaldo }}</td>
                                    <td>{{ $dana->tanggalTopup }}</td>
                                    <td>{{ $dana->jamTopup }}</td>
                                    <td>{{ $dana->jumlahTopup }}</td>
                                    <td>{{ $dana->jumlahSetelahTopup }}</td>
                                    <td>{{ $dana->statusIklan }}</td>
                                    <td>{{ $dana->keterangan }}</td>
                                    <td>
                                        <a href="{{ route('pendanaan.edit', [$dana->id]) }}"
                                            class="btn btn-warning float-left m-1">Edit</a>
                                        <form class="float-left m-1" action="{{ route('pendanaan.destroy', [$dana->id]) }}" method="POST">
                                            @method('delete')
                                            @csrf
                                            <button type="submit" class="btn btn-danger">Delete</a>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Daftar Ads</th>
                                <th>Tanggal Cek Saldo</th>
                                <th>Jam Cek Saldo</th>
                                <th>Jumlah Saldo</th>
                                <th>Tanggal Top Up</th>
                                <th>Jam Top Up</th>
                                <th>Jumlah Top Up</th>
                                <th>Jumlah Setelah Top Up</th>
                                <th>Status Iklan</th>
                                <th>Keterangan</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
@push('script')
    <!-- DataTables -->
    <script src="{{ asset('plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js') }}"></script>
    <script>
        $(function() {
            $("#table-data").DataTable({
                "responsive": true,
                "autoWidth": false,
            });
        });

    </script>
@endpush
@push('css')
    <link rel="stylesheet" href="{{ asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush
