@extends('dashboard.layout.main')

@section('container')


    <div class="card mb-3">
    <img src="https://source.unsplash.com/800x200?web,networking" class="card-img-top" alt="...">
    <div class="ccol-lg-8">
        <h5> {{$berita->title}}</h5>
        <article>{!!$berita->body!!}</article>   
        <a href="/berita" class="btn btn-primary">Back</a>
    </div>
    </div>
 

@endsection