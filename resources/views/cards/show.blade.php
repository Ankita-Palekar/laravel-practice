@extends('layout')

@section('content')
    <h2>{{$card->title}} </h2>
    <ul>
        @foreach($card->notes as $note)
            <li>{{ $note->body }}</li>
        @endforeach
    </ul>

    <hr>
    <h2> Adding new note</h2>
    <form action="/cards/{{$card->id}}/notes" method="POST">
        <textarea name="body" id="body" cols="30" rows="10">

        </textarea>

        <button value="submit">Submit</button>
    </form>
@stop