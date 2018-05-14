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

Route::get('/', ['uses' => 'MainController@show', 'as' => 'main']);
Route::get('/genre', function(){
    return view('music.genre');
})->name('genre');
Route::get('/genre/classic', ['uses' => 'GenreClassicController@show', 'as' => 'classic']);
Route::get('/genre/rock', ['uses' => 'GenreRockController@show', 'as' => 'rock']);
Route::get('/genre/hiphop', ['uses' => 'GenreHiphopController@show', 'as' => 'hiphop']);
Route::get('/artist', function(){
    $artist = App\Artist::find(2);
    $songs = App\Song::where('artist_id', 2)->get();
    return view('music.artist', ['artist' => $artist, 'songs' => $songs]);
})->name('artist');

Route::get('/album', 'AlbumsController@showPage')->name('album');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'admin'], 'prefix' => 'admin'], function(){
    Route::get('/', function(){
        return redirect('admin/users');
    });
    Route::get('/search', ['uses' => 'SearchController@search', 'as' => 'search']);
    Route::get('/users', ['uses' => 'UsersController@show', 'as' => 'users']);
    Route::post('/users/delete/{id}', ['uses' => 'UsersController@delete']);
    
    Route::group(['prefix' => 'genres'], function(){
        Route::get('/', ['uses' => 'GenresController@show', 'as' => 'genres']);
        Route::post('/delete/{id}', ['uses' => 'GenresController@delete']);
        Route::get('/edit/{id}', ['uses' => 'GenresController@showEdit']);
        Route::post('/edit/{id}', ['uses' => 'GenresController@edit', 'as' => 'genre_edit']);
        Route::get('/add', ['uses' => 'GenresController@showAdd']);
        Route::post('/add', ['uses' => 'GenresController@add', 'as' => 'genre_add']);
    });

    Route::group(['prefix' => 'artists'], function(){
        Route::get('/', ['uses' => 'ArtistsController@show', 'as' => 'artists']);
        Route::post('/delete/{id}', ['uses' => 'ArtistsController@delete', 'as' => 'artist_delete']);
        Route::get('/edit/{id}', ['uses' => 'ArtistsController@showEdit']);
        Route::post('/edit/{id}', ['uses' => 'ArtistsController@edit', 'as' => 'artist_edit']);
        Route::get('/add', ['uses' => 'ArtistsController@showAdd']);
        Route::post('/add', ['uses' => 'ArtistsController@add', 'as' => 'artist_add']);
    });
    
    Route::group(['prefix' => 'albums'], function(){
        Route::get('/', ['uses' => 'AlbumsController@show', 'as' => 'albums']);
        Route::post('/delete/{id}', ['uses' => 'AlbumsController@delete']);
        Route::get('/edit/{id}', ['uses' => 'AlbumsController@showEdit']);
        Route::post('/edit/{id}', ['uses' => 'AlbumsController@edit', 'as' => 'album_edit']);
        Route::get('/add', ['uses' => 'AlbumsController@showAdd']);
        Route::post('/add', ['uses' => 'AlbumsController@add', 'as' => 'album_add']);
    });
    
    Route::group(['prefix' => 'songs'], function(){
        Route::get('/', ['uses' => 'SongsController@show', 'as' => 'songs']);
        Route::post('/delete/{id}', ['uses' => 'SongsController@delete']);
        Route::get('/add', ['uses' => 'SongsController@showAdd']);
        Route::post('/add', ['uses' => 'SongsController@add', 'as' => 'song_add']);
        Route::get('/edit/{id}', ['uses' => 'SongsController@showEdit']);
        Route::post('/edit/{id}', ['uses' => 'SongsController@edit', 'as' => 'song_edit']);
    });
});
