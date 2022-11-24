@extends('layout.main')

@section('container')
<div class="row">
<div class="col col-lg-6">
    <h3>Edit Data Jurusan</h3>
<form action="/jurusan/{{ $jurusans->id }}" method="post">
@method('PUT')
@csrf
    
    <div class="mb-2">
    <label  class="form-label">Nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama"
    value="{{ old('nama',$jurusans->nama)}}" >

    @error('nama')
    <div class="invalid-feedback">
    {{ $message }}
    </div>
    @enderror

    </div>


    <div class="mb-2">
    <button type="submit" name="submit" class="btn btn-primary">Update</textarea>
    </div>

    
    </form>
    </div>
</div>

   

@endsection