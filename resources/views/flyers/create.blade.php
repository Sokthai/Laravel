
@extends('layout')
@section('content')
    <h1>Selling Your Home(laracast)</h1>
    {{ Form::open([
                'method' => 'POST',
                'route' => 'flyers.store',
                'files' => true,
         ]) }}

    @include('flyers.partial')

    {{ Form::close() }}
@stop