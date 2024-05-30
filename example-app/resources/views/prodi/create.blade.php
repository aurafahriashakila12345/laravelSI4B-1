@extends('layout.main')

@section('title',' Tambah Fakultas')

@section('content')

<div class="row

   <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Tambah prodi</h4>
                  <p class="card-description">
                    Formulir tambah program prodi
                  </p>
                  <form method="POST" action= "{{ route('prodi.store') }}" class="forms-sample">
                    <div class="form-sample">
                        @csrf
                    <div class="form-group">
                      <label for="nama">Nama Program Prodi</label>
                      <input type="text" class="form-control" name="nama" value="{{old('nama')}}" placeholder="Nama program prodi">
                      @error('nama')
                          <span class="text-danger">{{$message}} </span>
                      @enderror
                    </div>
                    <div class="form-group">
                      <label for="singkatan">Singkatan</label>
                      <input type="text" class="form-control" name="singkatan" placeholder="FIKR,FEB, ....">
                    </div>
                    <button type="submit" class="btn btn-primary mr-2">Submit</button>
                    <a href="{{ url('program studi')}}" class="btn btn-light">Batal</a>
                  </form>
                </div>
              </div>

</div>
@endsection
 