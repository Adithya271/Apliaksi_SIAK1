@extends('dashboard.layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Mahasiswa</h1>
        
      </div>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
{{ session('success') }}
</div>
@endif

<table class="table table-bordered my-4">

<a href="/mahasiswadashboard/create" class="btn btn-primary">Tambah Data Mahasiswa</a>
    <tr>
        <th>No</th>
        <th>NIM</th>
        <th>Nama</th>
        <th>JK</th>
        <th>Jurusan</th>
        <th>Alamat</th>
        <th>Aksi</th>

    </tr>
    @foreach ($mahasiswas as $mahasiswa)
    <tr>
        <td>{{ $loop->iteration}}</td>
        <td>{{ $mahasiswa->nim}}</td>
        <td>{{ $mahasiswa->nama}}</td>
        <td>{{ $mahasiswa->jenis_kelamin}}</td>
        <td>{{ $mahasiswa->jurusan->nama}}</td>
        <td>{{ $mahasiswa->alamat}}</td>
        <td>
            <a href="/mahasiswadashboard/{{ $mahasiswa->id}}/edit" class="btn btn-warning">EDIT</a>
            <form action="/mahasiswadashboard/{{ $mahasiswa->id}}" method="post" class="d-inline">
            @method('DELETE')
            @csrf
                
                <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Yakin akan menghapus data ini?')">DELETE</button>
                
            </form>
            
        </td>
    </tr>
    @endforeach
</table>

{{ $mahasiswas->links('pagination::bootstrap-5') }}

@endsection