<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;
use App\Models\Song;
use App\Models\User;
use App\Models\artiste;
use Carbon\Carbon;

class FirstController extends Controller
{
    public function index(){


      $nowDate = Carbon::now();
      $endDate = Carbon::now()->subDays(7);
      $data2 = song::where('created_at','>',$endDate)
                                            ->orderBy('votes')
                                            ->take(3)
                                            ->get();
      $data = Artiste::all()->random()->take(5)->distinct()->get();

      return view("firstcontroller.index", ["data2" => $data2], ["data" => $data],);
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
    public function hiphop(){
      $genre = song::where('genre', 'hiphop')
                        ->orderBy('artiste')

                                 ->get();

      return view("firstcontroller.genre", ["genre" => $genre]);
    }
    public function soiree(){
      $genre = song::where('genre', 'soiree')
                        ->orderBy('artiste')

                                 ->get();

      return view("firstcontroller.genre", ["genre" => $genre]);
    }
    public function classique(){
      $genre = song::where('genre', 'classique')
                        ->orderBy('artiste')

                                 ->get();

      return view("firstcontroller.genre", ["genre" => $genre]);
    }

    public function tendance(){
      $nowDate = Carbon::now();
      $endDate = Carbon::now()->subDays(7);
      $data = song::where('created_at','>',$endDate)
                                            ->orderBy('votes')
                                            ->take(10)
                                            ->get();
      return view("firstcontroller.tendance" , ["data" => $data]);
    }

    public function contact(){
      $data = Artiste::all();
      return view("firstcontroller.contact", ["data" => $data]);
    }
    public function create(){
      return view("firstcontroller.create");
    }

    public function playlist(){

      $data = song::join('fav', 'fav.song_id','=','songs.id')
              ->join('users', 'users.id', '=', 'fav.user_id')
              ->where('users.id', Auth::id())
              ->get();
      return view("firstcontroller.playlist",  ["data" => $data]);
    }

    public function profil($id){
      $profil = User::findOrFail($id);
      $data = User::where('id',$id)
                                  ->get();
      return view("firstcontroller.profil", ["data" => $data]);
    }
    public function artiste($id){
      $info = Artiste::findOrFail($id);
      $artiste = Artiste::where('id',$id)
                                  ->get();
      $data = Artiste::join('songs', 'songs.artiste', '=', 'artiste.name')
                                            ->where('artiste.id',$id)
                                            ->select('songs.*')
                                            ->get();


      return view("firstcontroller.artiste", ["artiste" => $artiste],["data" => $data]);
    }


    public function newsong(Request $request){
      $name = $request->file('newsong')->hashName();
      $request->file('newsong')->move("uploads", $name);
      $name2 = $request->file('couverture')->hashName();
      $request->file('couverture')->move("uploads", $name2);
      $song = new Song();
      $song->title = $request->input('title');
      $song->genre = $request->input('genre');
      $song->artiste = $request->input('artiste');
      $song->année = $request->input('annee');
      $song->url = "/uploads/".$name;
      $song->votes = 0;
      $song->image = "/uploads/".$name2;
      $song->save();
      return redirect("/");
    }

    public function fav($id){
      $song = song::find($id);
      if ($song == false)
       abort(404);
      Auth::user()->Like()->toggle($id);
      return back();


    }





}
