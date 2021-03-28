@extends('layouts.template')

@section('content')

<div class="upload-song">
  <form class="form-upload" action="/newsong" method="post" enctype="multipart/form-data">
    @csrf
    <div class="">

    <label for="title">Titre de la musique</label>
    <input type="text" name="title" placeholder="Titre de la musique" required>
    </div>
    <select name="genre" required>

    <option value="rap">Rap</option>
    <option value="soiree">Soirée</option>
    <option value="rock">Rock</option>
    <option value="electro">Electro</option>
    <option value="classique">Classique</option>
    <option value="hiphop">Hip-Hop</option>
    <option value="pop">Pop</option>
    <option value="autre">Autre</option>
  </select>
  <div class="">
    <label for="artiste">Nom de l'artiste(ex:Freeze Corleone)</label>
    <input type="text" name="artiste" placeholder="Artiste" required>
  </div>
    <input type="text" name="artiste" placeholder="Artiste" required>
    <div class="">
      <label for="annee">Annee</label>
      <input type="text" name="annee" placeholder="Année" required>
    </div>

    <div class="">


    <label for="couverture">Musique</label>
    <input type="file" name="newsong" placeholder="Musique"  required>
    </div>
    <div class="">


    <label for="couverture">Image de couverture</label>
    <input type="file" name="couverture" placeholder="Couverture" required>
    </div>
    <button class="button">Envoyer</button>

  </form>
</div>

@endsection


<style media="screen">
  .form-upload{
    display: grid;
    grid-template-columns : 1fr 1fr;
    grid-column-gap : 20px;
    grid-row-gap : 10px;
    text-align: center;
    position: absolute;
    top: 35%;
    left: 10%;
  }

  .button{
     grid-column: 1 / 3;
  }
</style>
