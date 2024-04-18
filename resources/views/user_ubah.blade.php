{{-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ubah User</title>
</head>
<body>
    <h1>Form Ubah Data User</h1>
    <a href="/user">Kembali</a>
    <br><br>
    <form action="/user/ubah_simpan/{{$data->user_id}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <label>Username</label>
        <input type="text" name="username" value="{{$data->username}}" placeholder="Masukkan Username">
        <br>
        <label>Nama</label>
        <input type="text" name="nama" value="{{$data->nama}}" placeholder="Masukkan Nama">
        <br>
        <label>Password</label>
        <input type="password" name="password" value="" placeholder="Masukkan Password">
        <br>
        <label>Level ID</label>
        <input type="number" name="level_id" value="{{$data->level_id}}" placeholder="Masukkan ID Level">
        <br><br>
        <input type="submit" value="Ubah" class="btn btn-success">
    </form>
</body>
</html> --}}

@extends('layout.app')

@section('subtitle', 'user')
@section('content_header_title', 'user')
@section('content_header_subtitle', 'Edit user')
{{-- Content body: main page content --}}
@section('content')
    <div class="container">
        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Ubah User</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/user/ubah_simpan/{{$data->user_id}}" class="form-horizontal" method="POST">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
              <div class="card-body">
                <div class="form-group row">
                  <label for="username" class="col-sm-2 col-form-label">Username</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{$data->username}}" class="form-control" id="username" name="username" placeholder="Username">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{$data->nama}}" class="form-control" id="nama" name="nama" placeholder="Nama">
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
                    <input type="text" value="{{$data->level_id}}" class="form-control" id="level_id" name="level_id" placeholder="Masukkan ID Level">
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
