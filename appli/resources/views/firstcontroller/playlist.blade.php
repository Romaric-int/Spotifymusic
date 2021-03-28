@extends('layouts.template')

@section('content')
<h1>Mes Likes</h1>
@foreach ($data as $p)
<div class="tend">
  <a href="#" data-file="{{$p->url}}" class="btn-song btn-song{{$p->id}}"><img src="{{$p->image}}" alt=""></a>
  <p>{{$p->title}}</p>
</div>


@endforeach
@endsection
