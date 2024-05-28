@extends('partials.layouts.app')

@section('title', 'Users - Laporan');

@section('content')


    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Detail User</h1>

                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">Kelola User</li>
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
            <a href="{{ route('users.index') }}" class="btn btn-primary btn-sm mb-2"><i
                    class="left fas fa-angle-left"></i>Back</a>
            <!-- Small boxes (Stat box) -->
            <div class="row">
                <div class="col-md-12 mb-2">
                    <div class="card">
                        <div class="card-header">
                            Edit User

                        </div>
                        <div class="card-body">

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name"
                                    value="{{ $data['name'] }}" disabled>
                            </div>

                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username"
                                    value="{{ $data['username'] }}" disabled>
                            </div>

                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" disabled
                                    value="{{ $data['email'] }}">
                            </div>

                            <div class="form-group">
                                <label for="role_id">Role</label>
                                <input type="text" class="form-control" disabled name="role" id="role"
                                    value="{{ $data['role']->name }}">
                            </div>

                            <div class="form-group">
                                <label for="no_niat">No Niat</label>
                                <input type="text" class="form-control" id="no_niat" name="no_niat" disabled
                                    value="{{ $data['no_niat'] }}">
                            </div>

                            <div class="form-group">
                                <label for="phone">Phone</label>
                                <input type="text" class="form-control" id="phone" name="phone" disabled
                                    value="{{ $data['phone'] }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
