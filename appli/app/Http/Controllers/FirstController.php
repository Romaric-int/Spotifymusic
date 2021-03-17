<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Song;

class FirstController extends Controller
{
    public function index(){

      $songs = song::all();

      return view("firstcontroller.index", ["songs" => $songs]);
    }

    public function about(){
      return view("firstcontroller.about");
    }

    public function rock(){
      $genre = song::where('genre', 'rock')
      ->orderBy('artiste')

               ->get();


      return view("firstcontroller.genre", ["genre" => $genre]);
    }

    public function rap(){
      $genre = song::where('genre', 'rap')
                        ->orderBy('artiste')

                                 ->get();

      return view("firstcontroller.genre", ["genre" => $genre]);
    }
    public function pop(){
      $genre = song::where('genre', 'pop')
                        ->orderBy('artiste')

                                 ->get();

      return view("firstcontroller.genre", ["genre" => $genre]);
    }
    public function electro(){
      $genre = song::where('genre', 'electro')
                        ->orderBy('artiste')

                                 ->get();

      return view("firstcontroller.genre", ["genre" => $genre]);
    }
    public function autre(){
      $genre = song::where('genre', 'autre')
                        ->orderBy('artiste')

                                 ->get();

      return view("firstcontroller.genre", ["genre" => $genre]);
    }





}
