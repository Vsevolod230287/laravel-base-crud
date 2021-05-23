@extends('layouts.app')


@section('main')

<div id="welcome">

    <div>
        <span class="title">  Best Comics  </span>
        <a  href="{{route('comics.index')}}">All Comics</a>
    </div>

    @endsection
