@extends('layouts.template')


@section('content')

@foreach ($artiste as $s)
<h1>{{$s->name}}</h1>
@endforeach

<h1>Ses musiques</h1>
@foreach ($data as $p)
<div class="tend">
  <a href="#" data-file="{{$p->url}}" class="btn-song btn-song{{$p->id}}"><img src="{{$p->image}}" alt=""><p>{{$p->title}}</p></a>
  
</div>


@endforeach
@endsection
