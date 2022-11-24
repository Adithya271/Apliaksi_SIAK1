@extends('layout.main')

@section('container')

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
{{ session('success') }}
</div>
@endif

<table class="table table-bordered my-4">
<h3>Data Jurusan</h3>
<a href="/jurusan/create" class="btn btn-primary">Tambah Data Jurusan</a>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Aksi</th>
    </tr>
    @foreach ($jurusans as $jurusan)
    <tr>
        <td>{{ $loop->iteration}}</td>
        <td>{{ $jurusan->nama}}</td>
        <td>
            <a href="/jurusan/{{ $jurusan->id}}/edit" class="btn btn-warning">EDIT</a>
            <form action="/jurusan/{{ $jurusan->id}}" method="post" class="d-inline">
            @method('DELETE')
            @csrf
                
                <button class="btn btn-danger btn-sm" type="submit" onclick="return confirm('Yakin akan menghapus data ini?')">DELETE</button>
                
            </form>
            
        </td>
    </tr>
    @endforeach
    </table>
{{ $jurusans->links('pagination::bootstrap-5') }}

@endsection