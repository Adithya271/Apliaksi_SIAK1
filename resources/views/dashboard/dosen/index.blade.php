@extends('dashboard.layout.main')

@section('container')

<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Data Dosen</h1>
        
      </div>

@if (session()->has('success'))
<div class="alert alert-success" role="alert">
{{ session('success') }}
</div>
@endif
<table class="table table-bordered my-4">

<a href="/dosendashboard/create" class="btn btn-primary">Tambah Data Dosen</a>
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
            <a href="/dosendashboard/{{ $dosen->id}}/edit" class="btn btn-warning">EDIT</a>
            <form action="/dosendashboard/{{ $dosen->id}}" method="post" class="d-inline">
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