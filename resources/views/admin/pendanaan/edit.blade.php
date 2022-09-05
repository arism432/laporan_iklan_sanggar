@extends('layouts.adminmaster')
@section('title', 'Edit Pendanaan')
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
                        <li class="breadcrumb-item"><a href="{{ route('pendanaan.index') }}">Pendanaan</a></li>
                        <li class="breadcrumb-item active">Edit</li>
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
                    <h3 class="card-title">Edit Data</h3>
                </div>
                <!-- /.card-header -->
                <form action="{{ route('pendanaan.update', [$pendanaan->id]) }}" method="POST">
                    @CSRF
                    @method('put')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Daftar Ads">Daftar Ads</label>
                                    <input type="text" name="daftarAds" list="daftarAds" class="form-control custom-select @error('daftarAds') is-invalid @enderror" value="{{$pendanaan->daftarAds}}">
                                    <datalist id="daftarAds" name="daftarAds">
                                        <option value="Google Ads 1"></option>
                                        <option value="Google Ads 2"></option>
                                        <option value="Google Ads 3"></option>
                                        <option value="Google Ads 4"></option>
                                        <option value="Google Ads 5"></option>
                                        <option value="Google Ads 6"></option>
                                        <option value="Google Ads 7"></option>
                                    </datalist>
                                    <small class="text-danger">@error('daftarAds') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Tanggal Cek Saldo">Tanggal Cek Saldo</label>
                                    <input type="date" name="tanggalCekSaldo" class="form-control @error('tanggalCekSaldo') is-invalid @enderror" value="{{$pendanaan->tanggalCekSaldo}}">
                                    <small class="text-danger">@error('tanggalCekSaldo') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-gorup">
                                    <label for="Jam Cek Saldo">Jam Cek Saldo</label>
                                    <input type="time" name="jamCekSaldo" class="form-control @error('jamCekSaldo') is-invalid @enderror" value="{{$pendanaan->jamCekSaldo}}">
                                    <small class="text-danger">@error('jamCekSaldo') {($message)} @enderror</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Jumlah Saldo">Jumlah Saldo</label>
                                    <input type="number" name="jumlahSaldo" class="form-control @error('jumlahSaldo') is-invalid @enderror" value="{{$pendanaan->jumlahSaldo}}">
                                    <small class="text-danger">@error('jumlahSaldo') {($message)} @enderror</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Tanggal Top Up">Tanggal Top Up</label>
                                    <input type="date" name="tanggalTopup" class="form-control @error('tanggalTopup') is-invalid @enderror" value="{{$pendanaan->tanggalTopup}}">
                                    <small class="text-danger">@error('tanggalTopup') {($message)} @enderror</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Jam Top Up">Jam Top Up</label>
                                    <input type="time" name="jamTopup" class="form-control @error('jamTopup') is-invalid @enderror" value="{{$pendanaan->jamTopup}}">
                                    <small class="text-danger">@error('jamTopup') {($message)} @enderror</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Jumlah Top Up">Jumlah Top Up</label>
                                    <input type="number" name="jumlahTopup" class="form-control @error('jumlahTopup') is-invalid @enderror" value="{{$pendanaan->jumlahTopup}}">
                                    <small class="text-danger">@error('jumlahTopup') {($message)} @enderror</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Jumlah Setelah Top Up">Jumlah Setelah Top Up</label>
                                    <input type="number" name="jumlahSetelahTopup" class="form-control @error('jumlahSetelahTopup') is-invalid @enderror" value="{{$pendanaan->jumlahSetelahTopup}}">
                                    <small class="text-danger">@error('jumlahSetelahTopup') {($message)} @enderror</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Status Iklan">Status Iklan</label>
                                    <input type="text" name="statusIklan" list="statusIklan" class="form-control custom-select @error('statusIklan') is-invalid @enderror" value="{{$pendanaan->statusIklan}}">
                                    <datalist id="statusIklan" name="statusIklan">
                                        <option value="Eligible"></option>
                                        <option value="Eligible Learning"></option>
                                    </datalist>
                                    <small class="text-danger">@error('statusIklan') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Keterangan">Keterangan</label>
                                    <input type="text" name="keterangan" class="form-control @error('keterangan') is-invalid @enderror" value="{{$pendanaan->keterangan}}">
                                    <small class="text-danger">@error('keterangan') {($message)} @enderror</small>
                                </div>
                            </div>
                        </div>
                    <!-- /.row -->
                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('admin.index') }}" class="m-1 btn btn-outline-danger">Back</a>
                            <button type="submit" class="m-1 btn btn-success">Update</button>
                        </div>
                    </div>
                </form>
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection