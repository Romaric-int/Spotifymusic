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

Route::get('/about', [FirstController::class, "about"]);

Route::get('/article/{id}', [FirstController::class, "article"])->where('id', '[0-9]+');

Route::get('/songs/create', [FirstController::class, "create"]);
Route::post('/songs', [FirstController::class, "store"]);
Route::get('/rock', [FirstController::class, "rock"]);
Route::get('/rap', [FirstController::class, "rap"]);
Route::get('/pop', [FirstController::class, "pop"]);
Route::get('/electro', [FirstController::class, "electro"]);
Route::get('/autre', [FirstController::class, "autre"]);


Auth::routes();
