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

    public function article($id){
      return view("firstcontroller.article", ["id" => $id]);
    }

}
