@extends('partials.layouts.app')

@section('title', 'Users - Laporan')


@section('content')

    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Kategori</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">Kelola Barang</li>
                        <li class="breadcrumb-item">Kategori</li>
                        <li class="breadcrumb-item active">Edit</li>
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
            <!-- Small boxes (Stat box) -->
            <form action="{{ route('kategoriview.update', $data['id']) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-5 mb-2">
                        <div class="card">
                            <div class="card-header">
                                Edit Kategori
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="nama_kategori">Kategori</label>
                                    <input type="text"
                                        class="form-control @error('nama_kategori') is-invalid
                                    @enderror"
                                        id="nama_kategori" name="nama_kategori" required placeholder="Nama Kategori"
                                        value="{{ old('nama_kategori', $data['nama_kategori']) }}">
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('kategoriview.index') }}" class="btn btn-secondary">Batal</a>


                            </div>
                        </div>
                    </div>

                </div>

            </form>
        </div>
    </section>
@endsection
