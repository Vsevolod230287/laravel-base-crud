@extends('layouts.app')

@section('main')
<div id="edit">
  <div class="edit-nav">

    <a href="{{route('comics.index')}}">Turn Back To All comics</a>
  </div>
    <form class="edit" action="{{route('comics.update', ['comic'=>$comic->id])}}" method="post">
        @csrf
        @method('PUT')
        <span>title </span> <input type="text" name="title" value="{{$comic->title}}" placeholder="Titolo">
        <span>description</span> <input type="text" name="description" value="{{$comic->description}}" placeholder="Descrizione">
        <span>thumb</span> <input type="text" name="thumb" value="{{$comic->thumb}}" placeholder="Link poster">
        <span>price</span> <input type="number" name="price" value="{{$comic->price}}" placeholder="Prezzo">
        <span>series</span> <input type="text" name="series" value="{{$comic->price}}" placeholder="Serie">
        <span>sale date</span> <input type="date" name="sale_date" value="{{$comic->sale_date}}" placeholder="Data di vendita">
        <span>type</span> <input type="text" name="type" value="{{$comic->type}}" placeholder="Tipo">

        <input type="submit" name="" value="Aggiorna">
    </form>


</div>

@endsection
