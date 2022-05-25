<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>
<body>

    <div>
        @forelse ($movies as $key => $movie)

            <h5 class="card-title">{{ $movie->title}}</h5>
            <p class="card-text">{{$movie->description}}</p>

        @empty

        @endforelse
    </div>

</body>
</html>
