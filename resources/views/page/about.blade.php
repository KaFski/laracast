@extends('app')
@section('content')
    <div class="container">
        <div class="content">
            <div class="title"><h1>About Me!</h1></div>
            <div class="text">My name is {{$name}}</div>
            @if(count($people))
            <ul>
                @foreach ($people as $person)
                    <li>{{$person}}</li>
                @endforeach
            </ul>
            @endif
        </div>
    </div>
@stop
