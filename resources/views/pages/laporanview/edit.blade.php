@extends('partials.layouts.app')

@section('title', 'Users - Laporan')

@section('content')


    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Edit Laporan</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">Kelola Laporan</li>
                        <li class="breadcrumb-item active">Edit Laporan</li>
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
            <form action="{{ route('laporanview.update', $data['id']) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="row">
                    <div class="col-md-12 mb-2">
                        <div class="card">
                            <div class="card-header">
                                Edit Laporan
                            </div>
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <input type="text"
                                        class="form-control @error('description') is-invalid
                                    @enderror"
                                        id="description" name="description"
                                        value="{{ old('description', $data['description']) }}">
                                </div>

                                @error('description')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror

                                <div class="form-group">
                                    <label for="date">Tanggal</label>
                                    <input type="date"
                                        class="form-control @error('date') is-invalid
                                    @enderror"
                                        id="date" name="date" value="{{ date('Y-m-d') }}">
                                </div>

                                @error('date')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror

                                @if (session()->get('role') == 1)
                                    <div class="form-group">
                                        <label for="status_id">Status</label>
                                        <select class="form-control" name="status_id" id="status_id">
                                            <option value="1">Verified</option>
                                            <option value="2">Not Verified</option>
                                        </select>
                                    </div>
                                @endif

                                {{-- <div class="form-group">
                                    <label for="kategori_id">Kategori Bencana</label>
                                    <select name="kategori_id" id="kategori_id"
                                        class="form-control @error('kategori_id') is-invalid
                                    @enderror">
                                        @foreach ($kategori as $k)
                                            @if ($k->id == $data['kategori_id'])
                                                <option selected value="{{ $k->id }}">{{ $k->nama_kategori }}
                                                </option>
                                            @else
                                                <option value="{{ $k->id }}">{{ $k->nama_kategori }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>

                                @error('kategori_id')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror --}}

                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('laporanview.index') }}" class="btn btn-secondary">Batal</a>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </section>
@endsection
