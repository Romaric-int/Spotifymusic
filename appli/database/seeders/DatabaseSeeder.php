<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
     public function run() {
         // \App\Models\User::factory(10)->create();


         DB::table('songs')->insert([
             'title' => 'Tchoin',
             'url' => '/son_mp3/kaaris-tchoin.mp3',
             'genre' => 'rap',
             'artiste' => "Kaaris",
             'année' => "20XX",
             'image' => "/img/kaaris.jpg",
             'votes' => 90000,
             'created_at' => Carbon::now(),
         ]);

         DB::table('songs')->insert([
             'title' => 'Nautilus',
             'url' => '/son_mp3/nautilus.mp3',
             'genre' => 'rap',
             'artiste' => "Alkapote",
             'année' => "2019",
             'image' => "/img/alkapote.jpg",
             'votes' => 8000,
             'created_at' => Carbon::now(),
         ]);

         DB::table('songs')->insert([
             'title' => 'Smells Like Teen Spirit',
             'url' => '/son_mp3/nirvana_smell.mp3',
             'genre' => 'rock',
             'artiste' => "Nirvana",
             'année' => "1991",
             'image' => "/img/nirvana.jpg",
             'votes' => 10050,
             'created_at' => Carbon::now(),
         ]);

         DB::table('songs')->insert([
             'title' => 'Bohemian Rhapsody',
             'url' => '/son_mp3/oehmian.mp3',
             'genre' => 'rock',
             'artiste' => "Queen",
             'année' => "1975",
             'image' => "/img/queen.jpg",
             'votes' => 800,
             'created_at' => Carbon::now(),
         ]);
         DB::table('users')->insert([
             'name' => 'Kaaris',
             'email' => 'kaaris@oui.com',
             'password' => '$2y$10$OKPtrmnFwAWDtAg80TBeiuWV86djwinRX7VHZBjLCoYS4HZrmxB7q',
             'avatar' => '/img/avatar/default.jpg'
         ]);

         DB::table('artiste')->insert([
             'name' => 'Freeze Corleone',
             'image' => "/img/avatar/freeze.png",

         ]);
         DB::table('artiste')->insert([
             'name' => 'Kaaris',
             'image' => "/img/avatar/kaaris.jpg",

         ]);
         DB::table('artiste')->insert([
             'name' => 'Alkapote',
             'image' => "/img/avatar/alkapote.jpg",

         ]);


         DB::table('artiste')->insert([
             'name' => 'Nirvana',
             'image' => "/img/avatar/nirvana.jpg",

         ]);
         DB::table('artiste')->insert([
             'name' => 'Queen',
             'image' => "/img/avatar/queen.jpg",

         ]);
     }
}
