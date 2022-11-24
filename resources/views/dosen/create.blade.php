@extends('layout.main')

@section('container')
<div class="row">
<div class="col col-lg-6">
<h3>Tambah Data Dosen</h3>
<form action="/dosen" method="post">
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
    <a href="/mahasiswadashboard" class="btn btn-primary">Back</a>
    </div>
    

    
    </form>
    </div>
</div>

   

@endsection