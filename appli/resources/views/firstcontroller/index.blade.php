@extends('layouts.template')

@section('content')
<h1>la page index de l'appli</h1>

<ul>
  @foreach($songs as $s )
            <li><a href="#" data-file="{{$s->url}}" class="song">{{ $s->title }}</a> aimé par {{$s->votes}} personnes</li>
        @endforeach
</ul>
@endsection
