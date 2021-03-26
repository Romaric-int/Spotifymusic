<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirstController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [FirstController::class, "index"]);

Route::get('/parcourir', [FirstController::class, "about"]);



Route::get('/songs/create', [FirstController::class, "create"]);
Route::post('/songs', [FirstController::class, "store"]);
Route::get('/rock', [FirstController::class, "rock"]);
Route::get('/rap', [FirstController::class, "rap"]);
Route::get('/pop', [FirstController::class, "pop"]);
Route::get('/electro', [FirstController::class, "electro"]);
Route::get('/Soirée', [FirstController::class, "soiree"]);
Route::get('/Hip-Hop', [FirstController::class, "hiphop"]);
Route::get('/Classique', [FirstController::class, "classique"]);
Route::get('/autre', [FirstController::class, "autre"]);
Route::get('/tendance', [FirstController::class, "tendance"]);
Route::get('/Contact', [FirstController::class, "contact"]);
Route::get('/profil/{id}', [FirstController::class, 'profil']);
Route::get('/Playlist', [FirstController::class, "playlist"]);


Auth::routes();
