<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/rood', function () {
    $x= new App\Kleur;
    $x->kleur_gekozen = 'rood';
    $x->user_id = Auth::user()->id;
    $x->save();
    return view('rood');
});

Route::get('/WhoAmI', function () {
    return Auth::user()->id;
    //return View::share('user');
});

Route::get('/blauw', function () {
    $y= new App\Kleur;
    $y->kleur_gekozen = 'blauw';
    $x->user_id = Auth::user()->id;
    $y->save();
    return view('blauw');
});

Route::get('/geel', function () {
    $x= new App\Kleur;
    $x->kleur_gekozen = 'geel';
    $x->user_id = Auth::user()->id;
    $x->save();
    return view('geel');
});

Route::get('/groen', function () {
    $x= new App\Kleur;
    $x->kleur_gekozen = 'groen';
    $x->user_id = Auth::user()->id;
    $x->save();
    return view('groen');
});
