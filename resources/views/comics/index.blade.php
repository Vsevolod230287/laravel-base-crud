@extends('layouts.app')

@section('main')
<main>
  <a class="home" href="{{route('home')}}">Home</a>
  <a class="create" href="{{route('comics.create')}}">Crea Comic</a>
    @foreach ($comics as $comic)
    <a href="{{ route('comics.show', ['comic' => $comic->id] ) }}">
        <div class="card">
            <img src="{{$comic->thumb}}" alt="">
            <h2>{{$comic->title}}</h2>
            <p>{!!$comic->description!!}</p>
            <h3>{{$comic->series}}</h3>
            <h3>{{$comic->sale_date}}</h3>
            <h4>{{$comic->type}}</h4>
            <h2>{{$comic->price}}</h2>
        </div>
    </a>
    @endforeach
</main>
@endsection
