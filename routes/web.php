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
    $pages = [
        "Capitolo 1",
        "Capitolo 2",
        "Capitolo 3"
    ];
    return view('home', compact("pages")); //file in resources/views
})->name('homepage');



Route::get('/pages/{index}', function ($index) {
    $pages = [
        "Capitolo 1",
        "Capitolo 2",
        "Capitolo 3"
    ];

    $titoletto = $pages[$index]; //recupero il singolo titolo con l'indice

    return view('pages.single-page', compact("titoletto")); //faccio passare il titoletto
})->name("capitolo");
