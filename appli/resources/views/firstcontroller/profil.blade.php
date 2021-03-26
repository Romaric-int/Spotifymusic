@extends('layouts.template')


@section('content')

<div class="stat_profil">
@foreach ($data as $p)



  <h1>Wave de {{ $p->name}}</h1>

  <img src="{{ $p->avatar}}" alt="avatar">




@endforeach
</div>
@endsection
