@extends('layout.main')

@section('container')
<div class="row">
<div class="col col-lg-6">
<h3>Tambah Data Jurusan</h3>
<form action="/jurusan" method="post">
@csrf
    
    <div class="mb-2">
    <label  class="form-label">Nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" >
    </div>


    <div class="mb-2">
    <button type="submit" name="submit" class="btn btn-primary">Create</textarea>
    </div>

    
    </form>
    </div>
</div>

   

@endsection