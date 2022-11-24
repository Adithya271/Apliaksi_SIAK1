@extends('dashboard.layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Tambah Data Dosen</h1>
        
      </div>
<div class="row">
<div class="col col-lg-6">

<form action="/dosendashboard" method="post">
@csrf
    <div class="mb-2">
    <label  class="form-label">NIP</label>
    <input type="text" class="form-control @error('nip') is-invalid @enderror" name="nip"
     id="nip" value="{{ old('nip')}}" >

    @error('nip')
    <div class="invalid-feedback">
    {{ $message }}
    </div>
    @enderror   
    </div>
    
    <div class="mb-2">
    <label  class="form-label">Nama</label>
    <input type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" id="nama" >
    </div>

    <div class="mb-2">
    <label for="jurusan" class="form-label">Jurusan</label>
    <select class="form-select" name="jurusan_id">
    @foreach($jurusans as $jurusan)
    @if (old('jurusan_id')== $jurusan->id)
    <option value="{{ $jurusan->id }}" selected>{{ $jurusan->nama }}</option>
    @else
    <option value="{{ $jurusan->id }}">{{ $jurusan->nama }}</option>
    @endif
    @endforeach
    </select>
    </div>

    <div class="mb-2">
    <label  class="form-label">Email</label>
    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" id="email" >
    </div>

    <div class="mb-2">
    <label  class="form-label">Telpon</label>
    <input type="number" class="form-control @error('telp') is-invalid @enderror" name="telp" id="telp" >
    </div>

    <div class="mb-2">
    <label for="alamat" class="form-label">Alamat</label>
    <textarea class="form-control @error('alamat') is-invalid @enderror" rows="3" name="alamat">  
    </textarea>
    </div>

    <div class="mb-2">
    <button type="submit" name="submit" class="btn btn-primary">Create</textarea>
    </div>

    <div class="mb-2">
    <a href="/dosendashboard" name="back" class="btn btn-warning">Back</a>
    </div>
    

    
    </form>
    </div>
</div>

   

@endsection