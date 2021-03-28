@extends('layouts.template')


@section('content')

<div class="stat_profil">
  @foreach ($data as $p)
    <h1 id="profil1">{{ $p->name}}</h1>
    <img id="profil2" src="{{ $p->avatar}}" alt="avatar">
  @endforeach
  <span id="vide1"></span>
  <span id="vide2"></span>
  <span id="vide3"></span>
  <span id="vide4"></span>
  <span id="vide5"></span>
  <span id="vide6"></span>
  <span id="vide7"></span>
  <span id="vide8"></span>
  <span id="vide9"></span>
  <span id="vide10"></span>
</div>
@endsection

<style media="screen">
  .stat_profil {
    position: relative;
    width: 100%;
    height: 93vh;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
    grid-template-rows: 1fr 1fr 1fr 1fr 1fr;
    grid-template-areas:  "a b b b d"
                          "a c c e ee"
                          "f c c g g"
                          "ii i h k ll"
                          "j j j j l";
    grid-gap: 1rem;
  }

  #profil1 {
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
    grid-area: c;
    width: 100%;
    font-size: 4rem;
  }
  #profil2 {
    position: relative;
    top: 25%;
    grid-area: a;
    width: 8rem;
    height: 8rem;
    border-radius: 100px;
  }

  #vide1 {
    position: relative;
    grid-area: b;
    width: 100%;
    background-image: url(../../../img/imgprofil/b.png);
    background-size: cover;
  }
  #vide2 {
    position: relative;
    grid-area: d;
    width: 100%;
  }
  #vide3 {
    position: relative;
    grid-area: e;
    width: 100%;
    background-color: #73ffba;
  }
  #vide4 {
    position: relative;
    grid-area: f;
    width: 100%;
    background-image: url(../../../img/imgprofil/f.png);
    background-size: cover;
  }
  #vide5 {
    position: relative;
    grid-area: g;
    width: 100%;
    background-image: url(../../../img/imgprofil/g.png);
    background-size: cover;
  }
  #vide6 {
    position: relative;
    grid-area: h;
    width: 100%;
    background-image: url(../../../img/imgprofil/h.png);
    background-size: cover;
  }
  #vide7 {
    position: relative;
    grid-area: i;
    width: 100%;
    background-color: #73ffba;
  }
  #vide8 {
    position: relative;
    grid-area: j;
    width: 100%;
    background-image: url(../../../img/imgprofil/j.png);
    background-size: cover;
  }
  #vide9 {
    position: relative;
    grid-area: k;
    width: 100%;
  }
  #vide10 {
    position: relative;
    grid-area: l;
    width: 100%;
    background-color: #73ffba;
  }


</style>
