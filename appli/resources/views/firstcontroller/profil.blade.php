@extends('layouts.template')


@section('content')

<div class="stat_profil">
  @foreach ($data as $p)
    <h1 id="profil1">{{ $p->name}}</h1>
    <img id="profil2" src="{{ $p->avatar}}" alt="avatar">
  @endforeach
  <span id="videe1"></span>
  <span id="videe2"></span>
  <span id="videe3"></span>
  <span id="videe4"></span>
  <span id="videe5"></span>
  <span id="videe6"></span>
  <span id="videe7"></span>
  <span id="videe8"></span>
  <span id="videe9"></span>
  <span id="videe10"></span>
</div>
@endsection
