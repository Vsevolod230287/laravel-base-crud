@extends('layouts.app')

@section('main')
<main>

    <div class="content">
        <div class="title">
          Best Comics
        </div>

        <div class="links">
            <a href="{{route('comics.index')}}">All Comics</a>
        </div>
    </div>
</main>

@endsection
