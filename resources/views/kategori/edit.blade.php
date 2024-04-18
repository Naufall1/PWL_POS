@extends('layout.app')

@section('subtitle', 'Kategori')
@section('content_header_title', 'Kategori')
@section('content_header_subtitle', 'Edit Kategori')
{{-- Content body: main page content --}}
@section('content')
    <div class="container">
        <div class="card card-info">
            <div class="card-header">
              <h3 class="card-title">Edit Kategori</h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="/kategori/{{$data->kategori_id}}" class="form-horizontal" method="POST">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
              <div class="card-body">
                <div class="form-group row">
                  <label for="kodeKategori" class="col-sm-2 col-form-label">Kode Kategori</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{$data->kategori_kode}}" class="form-control" id="kodeKategori" name="kodeKategori" placeholder="Kode">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="namaKategori" class="col-sm-2 col-form-label">Nama Kategori</label>
                  <div class="col-sm-10">
                    <input type="text" value="{{$data->kategori_nama}}" class="form-control" id="namaKategori" name="namaKategori" placeholder="Nama">
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
@endsection
