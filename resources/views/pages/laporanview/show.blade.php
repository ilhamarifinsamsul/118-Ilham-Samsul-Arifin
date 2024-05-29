@extends('partials.layouts.app')

@section('title', 'Users - Laporan')

@section('content')


    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail Laporan</h1>

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">Kelola Laporan</li>
                        <li class="breadcrumb-item active">Detail</li>
                    </ol>
                </div>
                <!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

        <div class="container-fluid">
            <a href="{{ route('laporanview.index') }}" class="btn btn-primary btn-sm mb-2"><i
                    class="left fas fa-angle-left"></i>Back</a>
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12 mb-2">
                    <div class="card">
                        <div class="card-header">
                            Detail Laporan

                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label for="user_id">Nama</label>
                                <input type="text" class="form-control" disabled name="user" id="user"
                                    value="{{ $data['user']->name }}">
                            </div>

                            <div class="form-group">
                                <label for="description">Deskripsi Kegiatan</label>
                                <input type="text" class="form-control" id="description" name="description"
                                    value="{{ $data['description'] }}" disabled>
                            </div>

                            <div class="form-group">
                                <label for="date">Tanggal</label>
                                <input type="text" class="form-control" id="date" name="date"
                                    value="{{ $data['date'] }}" disabled>
                            </div>

                            <div class="form-group">
                                <label for="picture">Dokumentasi</label>
                                <img width="120px" src="{{ asset('/assets/upload/laporan/' . $data['picture']) }}"
                                    alt="">
                            </div>

                            <div class="form-group">
                                <label for="kategori_id">Kategori</label>
                                <input type="text" class="form-control" disabled name="kategori" id="kategori"
                                    value="{{ $data['kategori']->nama_kategori }}">
                            </div>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
