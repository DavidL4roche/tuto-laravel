<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|Calibri (corps)
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

/*
Route::get('salut', function () {
    return "Salut les gens";
});

Route::get('salut/{slug}-{id}', ['as' => 'salut', function ($slug, $id) {
    return 'Lien : ' . route('salut', ['slug' => $slug, 'id' => $id]);
}])->where('slug', '[a-z0-9\-]+')->where('id', '[0-9]+');
*/

Route::group(['prefix' => 'admin', 'middleware' => 'ip'], function (){
    Route::get('{toto}', function () {
        return "Salut les gens";
    });
});

Route::get('a-propos', ['as' => 'about', 'uses' => 'AProposController@about']);
//Route::resource('a-propos', 'AProposController@about')->only('index');

Route::get('welcome', 'OuiOuiController@getIndex');

Route::resources([
    'auth' => 'Auth\LoginController',
    'password' => 'Auth\RegisterController',
]);

// prefix : cible tout les url ayant le prefixe désigné
// middleware : si l'utilisateur n'est pas authentifié, on lui interdit l'accès à cette page là et on le redirige vers le formulaire de connexion
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
