@extends('layout')


@section('content')
        @if (empty($people))
            There are no people.
        @else
            These are the people.
        @endif

        @foreach($people as $person)
            <li>{{ $person }}</li>
        @endforeach
@stop
