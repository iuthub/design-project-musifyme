<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Album;
use App\Song;

class GenreHiphopController extends Controller
{
    function show(){

    	$hiphop = Genre::find(4);
    	//$albums = Album::find(5);
        $genre_id = Genre::where('name', 'Hip-Hop')->value('id');
        $album_ids = Song::select('album_id')->where('genre_id', $genre_id)->distinct()->get();
        $albums = array();
        foreach($album_ids as $album_id){
            $albums[] = Album::find($album_id->album_id);
        }
    	

    	if(view()->exists('music.genrehiphop')){
    		return view('music.genrehiphop', ['hiphop' => $hiphop, 'albums' => $albums]);
		}    	

    }
}
