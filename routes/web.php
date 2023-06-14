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

    $navbar = config('db.navBar');
    $comics = config('db.comicsDb');
    $icons = config('db.icons');
    $lista1 = config('db.lista1');
    $lista2 = config('db.lista2');
    $lista3 = config('db.lista3');
    return view('pages/home',compact('navbar','comics','icons','lista1','lista2','lista3') );
})->name('home');
