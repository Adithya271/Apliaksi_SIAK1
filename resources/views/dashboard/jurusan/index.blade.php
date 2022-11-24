@extends('dashboard.layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Jurusan</h1>
        
      </div>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
{{ session('success') }}
</div>
@endif

<table class="table table-bordered my-4">

<a href="/jurusandashboard/create" class="btn btn-primary">Tambah Data Jurusan</a>
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
            <a href="/jurusandashboard/{{ $jurusan->id}}/edit" class="btn btn-warning">EDIT</a>
            <form action="/jurusandashboard/{{ $jurusan->id}}" method="post" class="d-inline">
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