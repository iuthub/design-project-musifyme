<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Album;
use App\Song;

class GenreRockController extends Controller
{
    function show(){

    	$rock = Genre::find(1);
        $genre_id = Genre::where('name', 'Rock')->value('id');
        $album_ids = Song::select('album_id')->where('genre_id', $genre_id)->distinct()->get();
        $albums = array();
        foreach($album_ids as $album_id){
            $albums[] = Album::find($album_id->album_id);
        }
    	
    	if(view()->exists('music.genrerock')){
    		return view('music.genrerock', ['rock' => $rock, 'albums' => $albums]);
		}    	

    }
}
