@extends('layout.main')

@section('container')
<div class="row">
<div class="col col-lg-6">
<h3>Tambah Data Mahasiswa</h3>
<form action="/mahasiswa" method="post">
@csrf
    <div class="mb-2">
    <label  class="form-label">NIM</label>
    <input type="text" class="form-control @error('nim') is-invalid @enderror" name="nim"
     id="nim" value="{{ old('nim')}}" >

    @error('nim')
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
        <label class="form-label">Jenis Kelamin</label><br/>
        <div class="d-flex">
        <div class="form-check me-3">
        <input class="form-check-input" type="radio" name="jenis_kelamin"  value="L" {{ old
         ('jenis_kelamin')=='L' ? 'checked' :'' }}checked> Laki-laki
        </div>
        <div class="form-check me-3">
        <input class="form-check-input" type="radio" name="jenis_kelamin"  value="P" {{ old 
         ('jenis_kelamin')=='P' ? 'checked' :'' }}checked> Perempuan
        </div>
        </div>

        @error('jenis_kelamin')
        <div class="invalid-feedback">
        {{ $message }}
        </div>
        @enderror
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
    <label for="alamat" class="form-label">Alamat</label>
    <textarea class="form-control @error('alamat') is-invalid @enderror" rows="3" name="alamat">  
    </textarea>
    </div>

    <div class="mb-2">
    <button type="submit" name="submit" class="btn btn-primary">Create</textarea>
    </div>

    
    </form>
    </div>
</div>

   

@endsection