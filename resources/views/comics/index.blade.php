@extends('layouts.app')

@section('main')
<main>
  @foreach ($comics as $comic)
  <div class="card">
    <img src="{{$comic->thumb}}" alt="">
    <h2>{{$comic->title}}</h2>
    <p>{!!$comic->description!!}</p>
    <h3>{{$comic->series}}</h3>
    <h3>{{$comic->sale_date}}</h3>
    <h4>{{$comic->type}}</h4>
    <h2>{{$comic->price}}</h2>




  </div>
@endforeach
</main>
@endsection
