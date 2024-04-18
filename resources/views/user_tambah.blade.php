{{-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tambah User</title>
</head>
<body>
    <h1>Form Tambah Data User</h1>
    <form action="/user/tambah_simpan" method="post">
        {{ csrf_field() }}
        <label>Username</label>
        <input type="text" name="username" placeholder="Masukkan Username">
        <br>
        <label>Nama</label>
        <input type="text" name="nama" placeholder="Masukkan Nama">
        <br>
        <label>Password</label>
        <input type="password" name="password" placeholder="Masukkan Password">
        <br>
        <label>Level ID</label>
        <input type="number" name="level_id" placeholder="Masukkan ID Level">
        <br><br>
        <input type="submit" value="Simpan" class="btn btn-success">
    </form>
</body>
</html> --}}


@extends('layout.app')

@section('subtitle', 'user')
@section('content_header_title', 'user')
@section('content_header_subtitle', 'Tambah user')
{{-- Content body: main page content --}}
@section('content')
    <div class="container">
        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Tambah User</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/user/tambah_simpan" class="form-horizontal" method="POST">
                {{ csrf_field() }}
              <div class="card-body">
                <div class="form-group row">
                  <label for="username" class="col-sm-2 col-form-label">Username</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan Username">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukkan Nama">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="password" class="col-sm-2 col-form-label">Password</label>
                  <div class="col-sm-10">
                    <input type="text" value="" class="form-control" id="password" name="password" placeholder="Masukkan Password">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="level_id" class="col-sm-2 col-form-label">Level ID</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="level_id" name="level_id" placeholder="Masukkan ID Level">
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-info">Simpan</button>
              </div>
              <!-- /.card-footer -->
            </form>
          </div>
    </div>
@endsection
