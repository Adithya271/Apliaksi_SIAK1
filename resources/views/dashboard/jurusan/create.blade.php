@extends('dashboard.layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Data Jurusan</h1>
        
      </div>
<div class="row">
<div class="col col-lg-6">

<form action="/jurusandashboard" method="post">
@csrf
    
    <div class="mb-2">
    <label  class="form-label">Nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" >
    </div>


    <div class="mb-2">
    <button type="submit" name="submit" class="btn btn-primary">Create</textarea>
    </div>

    <div class="mb-2">
    <a href="/jurusandashboard" name="back" class="btn btn-warning">Back</a>
    </div>

    
    </form>
    </div>
</div>

   

@endsection