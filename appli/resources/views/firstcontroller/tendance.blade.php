@extends('layouts.template')

@section('content')

<div class="pagetendance">
  <h1>Tendance</h1>
<div class="divtendancesong">
  @foreach($data as $s )
    <div class="tendancesong btn-song song{{$s->id}}">
      <a href="#" data-file="{{$s->url}}" class="atendance btn-song btn-song{{$s->id}}">
        <img src="{{$s->image}}" alt="">
        <p>{{ $s->title }} par {{ $s->artiste }}</p>
      </a>
      <p>aimé par {{$s->votes}} personnes</p>
    </div>
  @endforeach
</div>
</div>
@endsection
