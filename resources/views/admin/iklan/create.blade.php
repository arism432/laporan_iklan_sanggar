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
                                    <input type="text" name="daftar_ads" list="daftar_ads"
                                        class="form-control custom-select @error('daftar_ads') is-invalid @enderror"
                                        placeholder="Daftar Ads Google">
                                    <datalist id="daftar_ads" name="daftar_ads">
                                        <option value="Google Ads 1"></option>
                                        <option value="Google Ads 2"></option>
                                        <option value="Google Ads 3"></option>
                                        <option value="Google Ads 4"></option>
                                        <option value="Google Ads 5"></option>
                                        <option value="Google Ads 6"></option>
                                        <option value="Google Ads 7"></option>
                                    </datalist>
                                    <small class="text-danger">
                                        @error('daftar_ads')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Reach">Reach</label>
                                    <input type="number" name="reach"
                                        class="form-control @error('reach') is-invalid @enderror" placeholder="">
                                    <small class="text-danger">
                                        @error('reach')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-gorup">
                                    <label for="Ammount Spent">Amount Spent</label>
                                    <input type="number" name="amount_spent"
                                        class="form-control @error('amount_spent') is-invalid @enderror" placeholder="">
                                    <small class="text-danger">
                                        @error('amount_spent')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="CPM">CPM</label>
                                    <input type="number" name="cpm"
                                        class="form-control @error('cpm') is-invalid @enderror" placeholder="">
                                    <small class="text-danger">
                                        @error('cpm')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Cost per Outbound Click">Cost per Outbound Click</label>
                                    <input type="number" name="cost_per_outbound_click"
                                        class="form-control @error('cost_per_outbound_click') is-invalid @enderror"
                                        placeholder="">
                                    <small class="text-danger">
                                        @error('cost_per_outbound_click')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Outbound Click">Outbound Click</label>
                                    <input type="number " name="outbound_click"
                                        class="form-control @error('outbound_click') is-invalid @enderror" placeholder="">
                                    <small class="text-danger">
                                        @error('outbound_click')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Messaging Conversation Started">Messaging Conversation Started</label>
                                    <input type="number" name="messaging_conversation"
                                        class="form-control @error('messaging_conversation') is-invalid @enderror"
                                        placeholder="">
                                    <small class="text-danger">
                                        @error('messaging_conversation')
                                            {{ $message }}
                                        @enderror
                                    </small>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="Ctr All">Ctr All</label>
                                    <input type="number" name="ctrl_all"
                                        class="form-control @error('ctrl_all') is-invalid @enderror" placeholder="">
                                    <small class="text-danger">
                                        @error('ctrl_all')
                                            {{ $message }}
                                        @enderror
                                    </small>
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
