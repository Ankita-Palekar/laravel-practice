@extends('layout')

@section('content')
    <h1>All cards</h1>
    <ul>
        @foreach($cards as $card)
            <li><a href="{{$card->id}}">{{$card->title}}</a></li>
        @endforeach
    </ul>
@stop