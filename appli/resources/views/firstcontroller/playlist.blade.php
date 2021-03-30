@extends('layouts.template')

@section('content')
<div class="songs">

    @foreach($data as $p )
      <div class="song">
        <a href="#" data-file="{{$p->url}}" class="musique btn-song btn-song{{$p->id}}">
          <img src="{{$p->image}}">
          <p><b>{{ $p->title }}</b></p></a>
          <p>de {{ $p->artiste }}</p>
        </a>
      </div>
      <hr>
    @endforeach
  </div>
@endsection
