<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $comics = config('comics');

    return view('comics', ['comics' => $comics]);
}) -> name('comics');


Route::get('/comic/{comic_id}', function ($comic_id) {

    $comics = config('comics');

    if (is_numeric($comic_id) && $comic_id >= 0 && $comic_id < count($comics)) {

        $comicObject = $comics[$comic_id];

        return view('dc_comic', ['comic' => $comicObject]);
    } else {

        abort(404, 'Non è stato possibile trovare il fumetto inserito');

    }

}) -> name('comic');