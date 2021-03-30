@extends('layouts.template')


@section('content')
<div class="profilartist">
  <div class="divprofilartist">
    @foreach ($artiste as $s)
      <img src="{{$s->image}}">
      <h1>{{$s->name}}</h1>
      <hr class="hrartist">
    @endforeach
  </div>
  <div class="divmusique">
    @foreach ($data as $p)
      <div class="tend">
        <a href="#" data-file="{{$p->url}}" class="artistesong btn-song btn-song{{$p->id}}">
          <img src="{{$p->image}}" alt="">
          <p>{{$p->title}}</p>
        </a>
      </div>
    @endforeach
  </div>
</div>

@endsection
