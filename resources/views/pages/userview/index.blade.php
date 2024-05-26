@extends('partials.layouts.app')

@section('title', 'Users - Laporan')


@section('content')
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Kelola User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">Kelola User</li>
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
                    <a href="{{ route('users.create') }}" class="btn btn-primary btn-sm mb-2"><i
                            class="fas fa-plus"></i>Input Users</a>
                    <div class="card">
                        <div class="card-header">
                            Kelola User
                        </div>
                        <div class="card-body">
                            <table class="table" id="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Name</th>
                                        <th>Username</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $u)
                                        <tr>
                                            <td></td>
                                            <td>{{ $u['name'] }}</td>
                                            <td>{{ $u['username'] }}</td>
                                            <td>
                                                <a href="{{ route('users.show', $u['id']) }}"
                                                    class="btn btn-success btn-sm mb-2"><i class="fas fa-eye"></i></a>
                                                <a class="btn btn-warning btn-sm mb-2" href="">
                                                    <i class="fas fa-pen-fancy"></i></a>
                                                <form action="{{ route('users.destroy', $u['id']) }}" method='post'
                                                    enctype='multipart/form-data'>
                                                    <input type='hidden' name='_method' value='DELETE' />
                                                    <!-- GET, POST, PUT, PATCH, DELETE-->
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" onclick=""
                                                        class="btn btn-danger btn-sm mb-2"><i
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
                'copy', 'excel', 'pdf'
            ],
            "pageLength": 5,
            "lengthMenu": [
                [5, 100, 1000, -1],
                [5, 100, 1000, "ALL"],
            ],

        })
    </script>
@endSection
