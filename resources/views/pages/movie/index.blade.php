@extends('layout.layout')

@section('content')

    <div class="row row-cols-4 mt-5">
        @forelse ($movies as $key => $movie)

            <div></div>
            <div class="col card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">{{ $movie->title}}</h5>
                    <p class="card-text">{{$movie->date}}</p>
                    <a href="{{ route('pages.movie.index', [ 'id' => $movie->id])}}" class="card-link">Info</a>
                </div>
            </div>
        @empty

        @endforelse
    </div>

@endsection
