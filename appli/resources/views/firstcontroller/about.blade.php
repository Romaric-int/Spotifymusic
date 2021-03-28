@extends('layouts.template')

@section('content')
<div class="parcourir">
  <div class="gridgenre">
    <a id="genre1" class="texta" href="/rock">Rock</a>
    <a id="genre2" class="texta" href="/rap">Rap</a>
    <a id="genre3" class="texta" href="/electro">Electro</a>
    <a id="genre4" class="texta" href="/pop">Pop</a>
    <a id="genre5" class="texta" href="/Hip-Hop">Hip-Pop</a>
    <a id="genre6" class="texta" href="/Soirée">Soirée</a>
    <a id="genre7" class="texta" href="/Classique">Classique</a>
    <a id="genre8" class="texta" href="/autre">Autre</a>
    <span id="vide1"></span>
    <span id="vide2"></span>
    <span id="vide3"></span>
    <span id="vide4"></span>
    <span id="vide5"></span>
    <span id="vide6"></span>
  </div>
</div>

@endsection

<style media="screen">

  .gridgenre {
    position: relative;
    width: 100%;
    height: 100%;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr;
    grid-template-rows: 1fr 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
    grid-template-areas:  "a a b c d d"
                          "a a b e f g"
                          "a a b e h h"
                          "i j b e h h"
                          "i k b e h h"
                          "i k m m h h"
                          "l l m m h h"
                          "l l m m n n";
    grid-gap: 1rem;

  }

  .texta {
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    color: #fff;
    text-transform: uppercase;
    font-weight: bold;
    font-size: 2rem;
  }

  #genre1 {
    position: relative;
    grid-area: a;
    background-image: url(../../../img/parcourir/rock.png);
    background-size: cover;
    width: 100%;
  }
  #genre2 {
    position: relative;
    grid-area: b;
    background-image: url(../../../img/parcourir/rap.png);
    background-size: cover;
    width: 100%;
  }
  #genre3 {
    position: relative;
    grid-area: k;
    background-image: url(../../../img/parcourir/k.png);
    background-size: cover;
    width: 100%;
  }
  #genre4 {
    position: relative;
    grid-area: h;
    background-image: url(../../../img/parcourir/pop.png);
    background-size: cover;
    width: 100%;
  }

  #genre5 {
    position: relative;
    grid-area: l;
    background-image: url(../../../img/parcourir/hippop.png);
    background-size: cover;
    width: 100%;
  }
  #genre6 {
    position: relative;
    grid-area: e;
    background-image: url(../../../img/parcourir/soiree.png);
    background-size: cover;
    width: 100%;
  }
  #genre7 {
    position: relative;
    grid-area: d;
    background-image: url(../../../img/parcourir/classique.png);
    background-size: cover;
    width: 100%;
  }
  #genre8 {
    position: relative;
    grid-area: m;
    background-image: url(../../../img/parcourir/electro.png);
    background-size: cover;
    width: 100%;
  }
  #vide1 {
    position: relative;
    grid-area: c;
    background-color: #1de9b6;
    width: 100%;
  }#vide2 {
    position: relative;
    grid-area: f;
    background-color: #1de9b6;
    width: 100%;
  }#vide3 {
    position: relative;
    grid-area: g;
    background-color: #1de9b6;
    width: 100%;
  }#vide4 {
    position: relative;
    grid-area: i;
    background-color: #1de9b6;
    width: 100%;
  }#vide5 {
    position: relative;
    grid-area: j;
    background-color: #1de9b6;
    width: 100%;
  }#vide6 {
    position: relative;
    grid-area: n;
    background-color: #1de9b6;
    width: 100%;
  }

  #genre1:hover {
    background-color: #73ffba;
    background-image: none;
    color: #000;
  }
  #genre2:hover {
    background-color: #73ffba;
    background-image: none;
    color: #000;
  }
  #genre3:hover {
    background-color: #73ffba;
    background-image: none;
    color: #000;
  }
  #genre4:hover {
    background-color: #73ffba;
    background-image: none;
    color: #000;
  }
  #genre5:hover {
    background-color: #73ffba;
    background-image: none;
    color: #000;
  }
  #genre6:hover {
    background-color: #73ffba;
    background-image: none;
    color: #000;
  }
  #genre7:hover {
    background-color: #73ffba;
    background-image: none;
    color: #000;
  }
  #genre8:hover {
    background-color: #73ffba;
    background-image: none;
    color: #000;
  }
  #vide1:hover {
    background-image: url(../../../img/parcourir/c.png);
    background-size: cover;
  }
  #vide2:hover {
    background-image: url(../../../img/parcourir/f.png);
    background-size: cover;
  }
  #vide3:hover {
    background-image: url(../../../img/parcourir/g.png);
    background-size: cover;
  }
  #vide4:hover {
    background-image: url(../../../img/parcourir/i.png);
    background-size: cover;
  }
  #vide5:hover {
    background-image: url(../../../img/parcourir/j.png);
    background-size: cover;
  }
  #vide6:hover {
    background-image: url(../../../img/parcourir/autre.png);
    background-size: cover;
  }

</style>
