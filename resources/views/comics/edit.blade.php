@extends('layouts.app')

@section('main')
<div id="edit">
    <form class="" action="{{route('comics.update', ['comic'=>$comic->id])}}" method="post">
      @csrf
      @method('PUT')
        <input type="text" name="title" value="{{$comic->title}}" placeholder="Titolo">
        <input type="text" name="description" value="{{$comic->description}}"placeholder="Descrizione">
        <input type="text" name="thumb" value="{{$comic->thumb}}"placeholder="Link poster">
        <input type="number" name="price" value="{{$comic->price}}"placeholder="Prezzo">
        <input type="text" name="series" value="{{$comic->price}}"placeholder="Serie">
        <input type="date" name="sale_date" value="{{$comic->sale_date}}" placeholder="Data di vendita">
        <input type="text" name="type" value="{{$comic->type}}"placeholder="Tipo">

        <input type="submit" name="" value="Aggiorna">
    </form>
    <form class="" action="{{route('comics.destroy', ['comic'=>$comic])}}" method="post">
        @csrf
        @method('DELETE')
        <input type="submit" name="" value="ELIMINA">
    </form>

</div>

@endsection
