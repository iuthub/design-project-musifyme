<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;
use App\Album;
use App\User;
use App\Artist;
use App\Genre;

class MainController extends Controller
{
    public function show(){
        $songs = Song::all();    
        $albums = Album::latest()->limit(3)->get();
        $number = ['Users' => User::count(), 'Albums'=> Album::count(), 'Playlists' => Song::count(), 'Artists' => Artist::count()];
        
        if(view()->exists('music.main')){
            return view('music.main', ['songs' => $songs, 'albums' => $albums, 'number' => $number]);
        }
    }
}
