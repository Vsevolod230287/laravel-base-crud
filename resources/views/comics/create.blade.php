@extends('layouts.app')

@section('main')
<div id="create">
    <div class="create-nav">
        <a href="{{route('comics.index')}}">Turn Back To All comics</a>
    </div>
    
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form class="" action="{{route('comics.store')}}" method="post">
        @csrf
        @method('POST')
        <input type="text" name="title" value="" placeholder="Titolo">
        <input type="text" name="description" value="" placeholder="Descrizione">
        <input type="text" name="thumb" value="" placeholder="Link poster">
        <input type="number" name="price" value="" placeholder="Prezzo">
        <input type="text" name="series" value="" placeholder="Serie">
        <input type="date" name="sale_date" placeholder="Data di vendita">
        <input type="text" name="type" value="" placeholder="Tipo">

        <input type="submit" name="" value="Invia">
    </form>

</div>
@endsection
