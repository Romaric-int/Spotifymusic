@extends('layouts.template')

@section('content')
<h1></h1>
<div class="songs">

    @foreach($genre as $s )
      <div class="song">
        <a href="#" data-file="{{$s->url}}" class="musique btn-song btn-song{{$s->id}}">
          <img src="{{$s->image}}" alt="">
          <p><b>{{ $s->title }}</b></p>
          <a href="{{ $s->artiste }}">de {{ $s->artiste }}</a>
        </a>
        <p>aimé par {{$s->votes}} personnes</p>
        @auth
          @if(Auth::user()->Like->contains($s->id))
            <a href="/fav/{{$s->id}}"><img src="/img/icone/favon2.png" width="20" height="20" alt=""></a>
          @else
          <a href="/fav/{{$s->id}}"><img src="/img/icone/fav2.png" width="20" height="20" alt=""></a>
          @endif
        @endauth
      </div>
      <hr>
    @endforeach
  </div>
@endsection

  <style media="screen">

    hr {
      width: 90%;
    }

    .songs {
      display: flex;
      flex-direction: column;
      height: 93vh;
      overflow: auto;
    }

    .song {
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: space-between;
      width: 90%;
      margin: 2% 0% 2% 0%;
    }

    .musique {
      text-decoration: none;
      display: flex;
      flex-direction: row;
      align-items: center;
      justify-content: space-between;
      width: 50%;
    }
    .musique img {
      width: 4.5rem;
      height: 4.5rem;
    }
  </style>
