@extends('layout')

@section('content')
    <hr>
    <h2> Adding new note</h2>
    <form action="/notes/{{$note->id}}/edit" method="POST">
        {{method_field('PATCH')}}
        <textarea name="body" id="body" cols="30" rows="10">
            {{$note->body}}
        </textarea>
        <input type="hidden" name="_token" id="token" value="{{csrf_token()}}">
        <button value="submit">Submit</button>
    </form>
@stop