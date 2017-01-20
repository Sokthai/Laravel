@extends('layout')
@section('content')
    <h1>{{ $flyers->street }}</h1>
    <h3>{{ $flyers->price }}</h3>

    <hr>
    <div class="description">{!! nl2br($flyers->description) !!}</div>
@stop