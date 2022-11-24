@extends('dashboard.layout.main')

@section('container')

    @if($beritas->count()>0)
    <div class="card mb-3">
    <img src="https://source.unsplash.com/800x200?web,networking" class="card-img-top" alt="...">
    <div class="card-body text-center">
        <h5 class="card-title">{{$beritas[0]->title}}</h5>
        <p class="card-text">{{$beritas[0]->excerpt}}</p>
        <p class="card-text"><small class="text-muted">{{$beritas[0]->created_at->diffForHumans()}}</small></p>
        <a href="/beritadashboard/{{ $beritas[0]->id}}" class="btn btn-primary">Read More</a>
    </div>
    </div>
    @endif

    <div class="row mt-6">
    @foreach ($beritas->skip(1) as $berita)
    <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
        <img src="https://source.unsplash.com/600x200?web,networking" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">{{ $berita->title}}</h5>
            <p class="card-text">{{ $berita->excerpt }}</p>
            <a href="/beritadashboard/{{ $berita->id}}" class="btn btn-primary">Read More</a>
        </div>
        </div>
    </div>
    @endforeach

    </div>
    {{ $beritas->links() }}
@endsection