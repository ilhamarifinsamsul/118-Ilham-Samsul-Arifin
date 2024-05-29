@extends('partials.layouts.app')
<!-- Content Header (Page header) -->
@section('title', 'Laporan Anggota')
@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">List</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">Kelola Laporan</li>
                        <li class="breadcrumb-item">List</li>
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
            <div class="row">
                <div class="col-12">
                    <a href="{{ route('laporanview.create') }}" class="btn btn-primary btn-sm mb-2"><i
                            class="fas fa-plus"></i>Input Laporan</a>
                    <div class="card">
                        <div class="card-header">
                            List
                        </div>
                        <div class="card-body">
                            <table class="table" id="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Deskripsi Kegiatan</th>
                                        <th>Tanggal</th>
                                        <th>Dokumentasi</th>
                                        <th>Kategori</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $a = 1;
                                    @endphp
                                    @foreach ($laporan as $d)
                                        <tr>
                                            <td>{{ $a++ }}</td>
                                            <td>{{ $d->user->name }}</td>
                                            <td>{{ $d['description'] }}</td>
                                            <td>{{ $d['date'] }}</td>
                                            <td><img src="{{ asset('/assets/upload/laporan/' . $d['picture']) }}"
                                                    alt="" width="120px"></td>
                                            <td>{{ $d->kategori->nama_kategori }}</td>

                                            <td>
                                                <a href="{{ route('laporanview.show', $d['id']) }}"
                                                    class="btn btn-success btn-sm mb-2"><i class="fas fa-eye"></i></a>
                                                <a class="btn btn-warning btn-sm mb-2"
                                                    href="{{ route('laporanview.edit', $d['id']) }}">
                                                    <i class="fas fa-pen-fancy"></i></a>
                                                <form action="{{ route('laporanview.destroy', $d['id']) }}" method='post'
                                                    enctype='multipart/form-data'>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm mb-2"><i
                                                            class="fas fa-trash-alt"></i></button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
@section('script')
    <script>
        var table = $('#table').DataTable({
            responsive: true,
            "dom": 'Bflrtip',
            buttons: [
                // 'copy', 'excel', 'pdf'
            ],
            "pageLength": 5,
            "lengthMenu": [
                [5, 100, 1000, -1],
                [5, 100, 1000, "ALL"],
            ],

        })
    </script>
@endsection
