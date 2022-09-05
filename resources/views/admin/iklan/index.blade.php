@extends('layouts.adminmaster')
@section('title', 'Data Iklan')
@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Data Iklan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Home</a></li>
                        <li class="breadcrumb-item active">Data Iklann</li>
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
                        <h3 class="card-title">Data table of Iklan</h3>
                        <a href="{{ route('iklan.create') }}" class="btn btn-sm btn-success"><i
                                class="fas fa-plus"></i>
                            Create</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="table-iklan" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Daftar Ads</th>
                                <th>Reach</th>
                                <th>Amount Spent</th>
                                <th>CPM</th>
                                <th>Ctrl All</th>
                                <th>Cost per Outbound click</th>
                                <th>Outbound Click</th>
                                <th>Messaging conversation started</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($iklan as $pengiklan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $pengiklan->daftar_ads }}</td>
                                    <td>{{ $pengiklan->reach }}</td>
                                    <td>{{ $pengiklan->amount_spent }}</td>
                                    <td>{{ $pengiklan->cpm }}</td>
                                    <td>{{ $pengiklan->ctrl_all }}</td>
                                    <td>{{ $pengiklan->cost_per_outbound_click }}</td>
                                    <td>{{ $pengiklan->outbound_click }}</td>
                                    <td>{{ $pengiklan->messaging_conversation }}</td>
                                    <td>
                                        <a href="{{ route('iklan.edit', [$pengiklan->id]) }}"
                                            class="btn btn-warning float-left m-1">Edit</a>
                                        <form class="float-left m-1" action="{{ route('iklan.destroy', [$pengiklan->id]) }}" method="POST">
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
                                <th>Reach</th>
                                <th>Amount Spent</th>
                                <th>CPM</th>
                                <th>Ctrl All</th>
                                <th>Cost per Outbound click</th>
                                <th>Outbound click</th>
                                <th>Messaging coversation started</th>
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
            $("#table-iklan").DataTable({
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
