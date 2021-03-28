@extends('layouts.template')

@section('content')

@foreach($data as $s )

  <h1>Tendance</h1>
        <div class="btn-song song{{$s->id}}">


          <p><a href="#" data-file="{{$s->url}}" class="btn-song btn-song{{$s->id}}">{{ $s->title }}</a> par {{ $s->artiste }} aimé par {{$s->votes}} personnes</p>
          </div>
      @endforeach

@endsection
