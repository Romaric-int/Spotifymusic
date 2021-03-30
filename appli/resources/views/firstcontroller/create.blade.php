@extends('layouts.template')

@section('content')

<div class="upload-song">
  <div class="upform">

  <form class="form-upload" action="/newsong" method="post" enctype="multipart/form-data">
    <h1 id="up1">Déposer une musique :</h1>
    @csrf
  <div class="divup">
    <input id="up2" class="inputup" type="text" name="title" placeholder="Titre de la musique" required>
  </div>

  <div class="divup">
    <select id="up3" name="genre" required>
      <option value="rap">Rap</option>
      <option value="soiree">Soirée</option>
      <option value="rock">Rock</option>
      <option value="electro">Electro</option>
      <option value="classique">Classique</option>
      <option value="hiphop">Hip-Hop</option>
      <option value="pop">Pop</option>
      <option value="autre">Autre</option>
    </select>
  </div>

  <div class="divup">
    <input id="up4" class="inputup" type="text" name="artiste" placeholder="Artiste" required>
  </div>

  <div class="divup">
    <input id="up5" class="inputup" type="text" name="annee" placeholder="Année" required>
  </div>

  <div class="divup">
    <div id="up6">
      <label for="couverture">Musique</label>
      <input class="inputup" type="file" name="newsong" placeholder="Musique"  required>
    </div>
  </div>

  <div class="divup">
    <div id="up7">
      <label for="couverture">Image de couverture</label>
      <input class="inputup" type="file" name="couverture" placeholder="Couverture" required>
    </div>
  </div>
  <div id="up8">
    <button  class="buttonup">Envoyer</button>
  </div>

  </form>
</div>

</div>

@endsection
