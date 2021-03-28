@extends('layouts.template')

@section('content')
<div class="songs">

    @foreach($data as $p )
      <div class="song">
        <a href="#" data-file="{{$p->url}}" class="musique btn-song btn-song{{$p->id}}">
          <img src="{{$p->image}}">
          <p><b>{{ $p->title }}</b></p></a>
          <a href="{{ $p->artiste }}">de {{ $p->artiste }}</a>
        </a>
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
  .song img {
    width: 4.5rem;
    height: 4.5rem;
  }
</style>
