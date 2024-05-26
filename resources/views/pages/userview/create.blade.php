@extends('partials.layouts.app')

@section('title', 'Users - Laporan');

@section('content')


    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">New User</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item">Kelola User</li>
                        <li class="breadcrumb-item active">New</li>
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
            <form action="{{ route('users.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="col-md-5 mb-2">
                        <div class="card">
                            <div class="card-header">
                                New User
                            </div>
                            <div class="card-body">

                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text"
                                        class="form-control @error('name') is-invalid
                                    @enderror"
                                        id="name" name="name" required placeholder="Name">
                                </div>

                                @error('name')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror

                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text"
                                        class="form-control @error('username') is-invalid
                                    @enderror"
                                        id="username" name="username" required placeholder="Username">
                                </div>

                                @error('username')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text"
                                        class="form-control @error('email') is-invalid
                                    @enderror"
                                        id="email" name="email" required placeholder="Email">
                                </div>

                                @error('email')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror

                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="text"
                                        class="form-control @error('password') is-invalid
                                    @enderror"
                                        id="password" name="password" required placeholder="Password">
                                </div>

                                @error('password')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror

                                <div class="form-group">
                                    <label for="role_id">Role</label>
                                    <select name="role_id" id="role_id" required
                                        class="form-control @error('role_id') is-invalid
                                    @enderror">
                                        @foreach ($role as $d)
                                            <option value="{{ $d->id }}">{{ $d->name }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                @error('role_id')
                                    <p class="text-danger">
                                        {{ $message }}
                                    </p>
                                @enderror

                                <div class="form-group">
                                    <label for="no_niat">No Niat</label>
                                    <input type="text" class="form-control" id="no_niat" name="no_niat" required
                                        placeholder="No Niat">
                                </div>

                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" class="form-control" id="phone" name="phone" required
                                        placeholder="Phone">
                                </div>

                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a href="{{ route('users.index') }}" class="btn btn-secondary">Batal</a>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </section>
@endsection
