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
                        <li class="breadcrumb-item">Kelola Barang</li>
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
                    <a href="#" class="btn btn-primary btn-sm mb-2">New</a>
                    <div class="card">
                        <div class="card-header">
                            List
                        </div>
                        <div class="card-body">
                            <table class="table" id="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Barang</th>
                                        <th>Nama Kategori</th>
                                        <th>Stok</th>
                                        <th>Nama Satuan</th>
                                        <th>Kondisi</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>Sampo</td>
                                        <td>Daging</td>
                                        <td>2</td>
                                        <td>kg</td>
                                        <td>baik</td>
                                        <td></td>
                                    </tr>
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
