@extends('layouts.app')

@section('main')
<div id="index">
    <div class="index-nav">
        <a class="home" href="{{route('home')}}">Home</a>
        <a class="create" href="{{route('comics.create')}}">Crea Comic</a>
    </div>
    <div class="cards-container">
        @foreach ($comics as $comic)
        <div class="card">
            <a href="{{ route('comics.show', ['comic' => $comic->id] ) }}">
                <img src="{{$comic->thumb}}" alt="">
                <h2>{{$comic->title}}</h2>
                <p>{!!$comic->description!!}</p>
                <h3>{{$comic->series}}</h3>
                <h3>{{$comic->sale_date}}</h3>
                <h4>{{$comic->type}}</h4>
                <h2>{{$comic->price}}</h2>
            </a>
            <h2><a href="{{route('comics.edit', ['comic'=>$comic->id])}}">Modifica</a></h2>

            <button v-if="{{$comic->id}} != id" @click="showForm({{$comic->id}})" type="button" name="button">Elimina</button>

            <div class="hide" v-if="id == {{$comic->id}}">
                <form class="" action="{{route('comics.destroy', ['comic'=>$comic->id])}}" method="post">
                    @csrf
                    @method('DELETE')
                    <p>Vuoi cancelarlo?</p>
                    <input type="submit" name="" value="SI">
                    <button @click="anulla">NO</button>

                </form>
            </div>

        </div>
        @endforeach

    </div>

</div>
@endsection
