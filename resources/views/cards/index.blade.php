@extends('layout')

@section('content')
    <h1>All Cards</h1>

    <?php echo "cards" ; print_r($cards); ?>

    <ul>
        @foreach($cards as $card)
            <li>{{$card->title}}</li>
        @endforeach
    </ul>
@stop