@extends('layout.main')

@section('container')

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
{{ session('success') }}
</div>
@endif

<table class="table table-bordered my-4">
<h3>Data Dosen</h3>
<a href="/dosen/create" class="btn btn-primary">Tambah Data Dosen</a>
    <tr>
        <th>No</th>
        <th>NIP</th>
        <th>Nama</th>
        <th>Jurusan</th>
        <th>Email</th>
        <th>Telp</th>
        <th>Alamat</th>
        <th>Aksi</th>
    </tr>
    @foreach ($dosens as $dosen)
    <tr>
        <td>{{ $loop->iteration}}</td>
        <td>{{ $dosen->nip}}</td>
        <td>{{ $dosen->nama}}</td>
        <td>{{ $dosen->jurusan->nama}}</td>
        <td>{{ $dosen->email}}</td>
        <td>{{ $dosen->telp}}</td>
        <td>{{ $dosen->alamat}}</td>
        <td>
            <a href="/dosen/{{ $dosen->id}}/edit" class="btn btn-warning">EDIT</a>
            <form action="/dosen/{{ $dosen->id}}" method="post" class="d-inline">
            @method('DELETE')
            @csrf
                
                <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Yakin akan menghapus data ini?')">DELETE</button>
                
            </form>
            
        </td>
    </tr>
    @endforeach
    </table>
{{ $dosens->links('pagination::bootstrap-5') }}

@endsection