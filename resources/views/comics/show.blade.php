@extends('layouts.app')

@section('main')
<div id="show">
<div class="show-nav">

  <a href="{{route('comics.index')}}">All comics</a>
</div>

    <div class="detail">
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

    <form class="" action="{{route('comics.destroy', ['comic'=>$comic])}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" name="" value="ELIMINA">
    </form>

  </div>

@endsection
