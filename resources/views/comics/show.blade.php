@extends('layouts.app')

@section('main')

<main>

    <div class="detail">
      <a href="{{route('comics.index')}}">All comics</a>
        <div class="img">
            <h2>{{$comic->title}}</h2>
            <img src="{{$comic->thumb}}" alt="">

        </div>
        <p>{!!$comic->description!!}</p>
        <h3>{{$comic->series}}</h3>
        <h3>{{$comic->sale_date}}</h3>
        <h4>{{$comic->type}}</h4>
        <h2>{{$comic->price}}</h2>


    </div>


</main>

@endsection
