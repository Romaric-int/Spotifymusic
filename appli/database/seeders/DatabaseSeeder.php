<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
             'title' => 'chanson 1',
             'url' => 'https://file-examples-com.github.io/uploads/2017/11/file_example_MP3_700KB.mp3',
             'votes' => 1350
         ]);

         DB::table('songs')->insert([
             'title' => 'chanson numéro deux',
             'url' => 'https://file-examples-com.github.io/uploads/2017/11/file_example_MP3_1MG.mp3',
             'votes' => 10050
         ]);
     }
}
