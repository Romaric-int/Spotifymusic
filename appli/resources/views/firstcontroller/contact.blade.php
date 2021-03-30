@extends('layouts.template')

@section('content')
<div class="pageartist">
  @foreach ($data as $p)
    <a href="/artiste/{{$p->id}}" class="divartist artiste{{$p->id}}">
      <img class="imgpgartiste"src="{{$p->image}}">
      <p class="oneartiste">  <h1>{{$p->name}}</h1> </p>
    </a>
  @endforeach
</div>

@endsection
