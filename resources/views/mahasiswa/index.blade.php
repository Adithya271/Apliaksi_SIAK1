@extends('layout.main')

@section('container')

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
{{ session('success') }}
</div>
@endif

<table class="table table-bordered my-4">
<h3>Data Mahasiswa</h3>
<a href="/mahasiswa/create" class="btn btn-primary">Tambah Data Mahasiswa</a>
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
            <a href="/mahasiswa/{{ $mahasiswa->id}}/edit" class="btn btn-warning">EDIT</a>
            <form action="/mahasiswa/{{ $mahasiswa->id}}" method="post" class="d-inline">
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