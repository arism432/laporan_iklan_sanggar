@extends('layouts.adminmaster')
@section('title', 'Create Data Iklan')
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
                        <li class="breadcrumb-item"><a href="{{ route('iklan.index') }}">Data Iklan</a></li>
                        <li class="breadcrumb-item active">Create</li>
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
                    <h3 class="card-title">Create Data Iklan</h3>
                </div>
                <!-- /.card-header -->
                <form action="{{ route('iklan.store') }}" method="POST">
                    @CSRF
                    <div class="card-body">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Daftar Ads">Daftar Ads</label>
                                    <input type="text" name="daftarAds" list="daftarAds" class="form-control custom-select @error('daftarAds') is-invalid @enderror" placeholder="Daftar Ads Google">
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
                                    <label for="Reach">Reach</label>
                                    <input type="number" name="reach" class="form-control @error('reach') is-invalid @enderror" placeholder="">
                                    <small class="text-danger">@error('reach') {{$message}} @enderror</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-gorup">
                                    <label for="Ammount Spent">Amount Spent</label>
                                    <input type="number" name="amountSpent" class="form-control @error('amountSpent') is-invalid @enderror" placeholder="">
                                    <small class="text-danger">@error('amountSpent') {($message)} @enderror</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="CPM">CPM</label>
                                    <input type="number" name="cpm" class="form-control @error('cpm') is-invalid @enderror" placeholder="">
                                    <small class="text-danger">@error('cpm') {($message)} @enderror</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Ctr All">Ctr All</label>
                                    <input type="number" name="ctrlAll" class="form-control @error('ctrlAll') is-invalid @enderror" placeholder="">
                                    <small class="text-danger">@error('ctrAll') {($message)} @enderror</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Cost per Outbound Click">Cost per Outbound Click</label>
                                    <input type="number" name="costPerOutboundClick" class="form-control @error('costPerOutboundClick') is-invalid @enderror" placeholder="">
                                    <small class="text-danger">@error('costPerOutboundClick') {($message)} @enderror</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Outbound Click">Outbound Click</label>
                                    <input type="number " name="outboundClick" class="form-control @error('outboundClick') is-invalid @enderror" placeholder="">
                                    <small class="text-danger">@error('outboundClick') {($message)} @enderror</small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Messaging Conversation Started">Messaging Conversation Started</label>
                                    <input type="number" name="messagingConversation" class="form-control @error('messagingConversation') is-invalid @enderror" placeholder="">
                                    <small class="text-danger">@error('messagingConversation') {($message)} @enderror</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.row -->
                    <div class="card-footer">
                        <div class="d-flex justify-content-end">
                            <a href="{{ route('iklan.index') }}" class="m-1 btn btn-outline-danger">Back</a>
                            <button type="submit" class="m-1 btn btn-success">Create</button>
                        </div>
                    </div>
                </form>
            </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
@endsection
