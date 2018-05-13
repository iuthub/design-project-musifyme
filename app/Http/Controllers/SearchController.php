<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\User;
use App\Artist;
use App\Album;
use App\Genre;
use App\Song;

class SearchController extends Controller
{
    public function __construct() {
        $this->title = 'Results of search';
    }
    public function search(Request $request){
        $target = $request->input('target');
        $users = $this->searchEls($target, (new User()));
        $genres = $this->searchEls($target, (new Genre()));
        $albums = $this->searchEls($target, (new Album()));
        $artists = $this->searchEls($target, (new Artist()));
        $songs = $this->searchEls($target, (new Song));
        return view('admin.search', ['title' => $this->title, 'users' => $users, 
            'genres' => $genres, 'albums' => $albums, 'artists' => $artists, 'songs' => $songs]);
    }
    
    public function searchEls($target, $model){
        return $model->where('name', 'like', '%'.$target.'%')->get();
    }
}
