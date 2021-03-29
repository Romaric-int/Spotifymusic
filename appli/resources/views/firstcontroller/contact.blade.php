@extends('layouts.template')

@section('content')

@foreach ($data as $p)
<div class="artiste{{$p->id}}">
<a href="/artiste/{{$p->id}}">  <h1>{{$p->name}}</h1> </a>
</div>


@endforeach

@endsection
