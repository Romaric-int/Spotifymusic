@extends('layouts.template')

@section('content')


<div class="accueil">

  <div id="playlist">
    <a href="/MesLikes" class="play1">
      <div class="imgplay">
      </div>
      <p class="textplay">MesLikes</p>
    </a>



  </div>

  <div id="artiste">
    @foreach($data as $s)

    <a href="/artiste/{{$s->id}}" class="art">
      <div class="imgart">
        <img src="{{$s->image}}" alt="">
      </div>
      <p >{{$s->name}}</p>
    </a>

    @endforeach



  </div>
  <div id="tendance">

    <h1>Tendances</h1>
    @foreach($data2 as $s )


      <div class="tend">
        <a href="#" data-file="{{$s->url}}" class="btn-song btn-song{{$s->id}}"><img src="{{$s->image}}" alt=""></a>
        <p>{{$s->title}}</p>

      </div>
          @endforeach



  </div>
</div>
@endsection

<style media="screen">
  * {
    margin: 0 auto;
    padding: 0;
    font-family: 'Roboto', sans-serif;
  }

  .accueil {
    position: relative;
    width: 90%;
    height: 95%;
    display: grid;
    grid-template-columns: 2.3fr 0.7fr;
    grid-template-rows: 0.3fr 1.25fr 1.25fr;
    grid-template-areas:  "vide vide"
                          "playlist tendance"
                          "artiste tendance";
    grid-gap: 1.5rem;
    margin: 0% 5% 0% 5%;
  }

  #playlist {
    position: relative;
    grid-area: playlist;
    width: 100%;
    /* background-color: #f7f7f7; */
    display: flex;
    flex-direction: row;
  }

  .play1 {
    position: relative;
    width: 55%;
    height: 75%;
    display: flex;
    margin-top: 5%;
    flex-direction: column;
    text-decoration: none;
    color: #fff;
    background-color: green;
    background-image: url(../../../img/play.jpg);
    background-size: cover;
    background-position: center;
  }

  .play2 {
    position: relative;
    width: 35%;
    height: 75%;
    display: flex;
    margin-top: 5%;
    flex-direction: column;
    text-decoration: none;
    color: #fff;
    background-color: green;
    background-image: url(../../../img/play.jpg);
    background-size: cover;
    background-position: center;
  }

  .textplay {
    position: relative;
    top: 10%;
    color: #fff;
    text-transform: uppercase;
    font-weight: bold;
    font-size: 1.5rem;
  }

  #artiste {
    position: relative;
    grid-area: artiste;
    width: 100%;
    display: flex;
    flex-direction: row;
  }

  .art {
    position: relative;
    width: 20%;
    height: 65%;
    margin-top: 5%;
    display: flex;
    flex-direction: column;
    text-decoration: none;
  }

  .imgart img{
    width: 10rem;
    height: 10rem;
    background-color: purple;
    border-radius: 100px;
  }

  .art p {
    position: relative;
    top: 10%;
    color: #616161;
    text-transform: uppercase;
    font-weight: bold;
  }

  #tendance {
    position: relative;
    grid-area: tendance;
    width: 100%;
    /* background-color: blue; */
    display: flex;
    flex-direction: column;
    justify-content: space-around;
    border: 2px solid #616161;
  }
  #tendance h1 {
    color: #616161;
  }

  .tend {
    display: flex;
    flex-direction: row;
    align-items: center;
    width: 100%;
  }

  .tend img {
    width: 4rem;
    height: 4rem;
  }

  .tend p {
    margin-left: 5%;
    color: #616161;
  }
</style>
