<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use App\Album;
use App\Song;

class GenreClassicController extends Controller
{
    function show(){
    	$classic = Genre::find(3);        
        $genre_id = Genre::where('name', 'Classics')->value('id');
        $album_ids = Song::select('album_id')->where('genre_id', $genre_id)->distinct()->get();
        $albums = array();
        foreach($album_ids as $album_id){
            $albums[] = Album::find($album_id->album_id);
        }
    	
    	if(view()->exists('music.genreclassic')){
    		return view('music.genreclassic', ['classic' => $classic, 'albums' => $albums]);
		}    	

    }
}
