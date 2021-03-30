@extends('layouts.template')

@section('content')
<div class="pageac">

  <div class="accueil">

    <div id="playlist">
      <a href="/MesLikes" class="play1">
        <div class="imgplay">
        </div>
        <p class="textplay">Mes Likes</p>
      </a>
    </div>

    <div id="artiste">
      @foreach($data as $s)
      <a href="/artiste/{{$s->id}}" class="art">
        <div class="imgart">
          <img src="{{$s->image}}" alt="">
        </div>
        <p >{{$s->name}}</p>
      </a>
      @endforeach
    </div>

    <div id="tendance">
      <h1>Tendances</h1>
      @foreach($data2 as $s )
        <div class="tend">
          <a href="#" data-file="{{$s->url}}" class="btn-song btn-song{{$s->id}}"><img src="{{$s->image}}" alt=""></a>
          <p>{{$s->title}}</p>
        </div>
      @endforeach
    </div>
  </div>
</div>
@endsection
