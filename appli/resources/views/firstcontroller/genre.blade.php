@extends('layouts.template')

@section('content')
<h1></h1>
@foreach($genre as $s )
          <li><a href="#" data-file="{{$s->url}}" class="song">{{ $s->title }}</a> par {{ $s->artiste }} aimé par {{$s->votes}} personnes</li>
      @endforeach
@endsection
