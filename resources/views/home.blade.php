<h1>Home</h1>
<ul>
    @foreach ($movies as $movie)
        <li>{{$movie->title}}</li>
    @endforeach
<ul>