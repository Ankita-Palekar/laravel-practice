@extends('layout')

@section('content')
    <p>
    {{$note->body}}
    </p>
    <hr>
    <a href="/notes/{{$note->id}}/edit">Edit link</a>
@stop