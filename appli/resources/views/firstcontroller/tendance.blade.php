@extends('layouts.template')

@section('content')
@foreach($tend as $s )
          <li><a href="#" data-file="{{$s->url}}" class="song">{{ $s->title }}</a> par {{$s->artiste}} aimé par {{$s->votes}} personnes ---- Genre: <a  href="/{{$s->genre}}">{{$s->genre}}</a></li>
      @endforeach
@endsection
