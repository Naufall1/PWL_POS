@extends('layout.app')

@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Create')
{{-- Content body: main page content --}}
@section('content')
    <div class="container">
        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Tambah Kategori</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="../kategori" class="form-horizontal" method="POST">
                {{ csrf_field() }}
              <div class="card-body">
                <div class="form-group row">
                  <label for="kodeKategori" class="col-sm-2 col-form-label">Kode Kategori</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="kodeKategori"
                    name="kodeKategori" placeholder="Masukkan Kode">
                    @error('kodeKategori')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                  </div>
                </div>
                <div class="form-group row">
                  <label for="namaKategori" class="col-sm-2 col-form-label">Nama Kategori</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="namaKategori"
                    name="namaKategori" placeholder="Masukkan Nama">
                    @error('namaKategori')
                        <div class="alert alert-danger">{{$message}}</div>
                    @enderror
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <button type="submit" class="btn btn-info">Submit</button>
              </div>
              <!-- /.card-footer -->
            </form>
          </div>
    </div>
    {{-- @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
          @endforeach
        </ul>
      </div>
    @endif --}}
@endsection