<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Song;
use App\Genre;
use App\Album;
use App\Artist;
use Validator;

class SongsController extends Controller
{
    public function __construct() {
//        include_once '/libs/getID3-master/demos/demo.browse.php';
        include_once '/libs/mp3file.php';
        $this->messages = [
            'required' => 'Fill the field :attribute',
            'string' => 'Only letters are required in fieal :attribute',
        ];
    }
    public function validator($data){
        $validator = Validator::make($data, [
            'name' => 'required|string',
            'photo' => 'required',
            'artist' => 'required',
            'song' => 'required',
            'rate' => 'required',
            'genre' => 'required',
            'album' => 'required',
        ], $this->messages);
         
         return $validator;
    }
    
    public function show() {
        $title = 'Songs Table';
        $songs = Song::all();
        if(view()->exists('admin.songs')){
            return view('admin.songs', ['title' => $title, 'songs' => $songs]);
        }
    }
    
    public function delete(Request $request, $id){
        if($request->isMethod('POST')){
            $song = Song::find($id);
            if($song->delete()){
                return response()->json(array('result' => 'Song successfully deleted'), 200);
            }
            return response()->json(array('result' => 'failure'), 200);
        }
        return 'Hello';
    }
    
    public function showAdd(){
        $title = 'Add Song';
        $genres = Genre::select('name', 'id')->get();
        $artists = Artist::select('name', 'id')->get();
        $albums = Album::select('name', 'id')->get();
        if(view()->exists('admin.songAdd')){
            return view('admin.songAdd', ['genres' => $genres, 'artists' => $artists, 'albums' => $albums, 'title' => $title]);
        }
    }
    
    public function add(Request $request){
        $data = $request->all();
        $validator = $this->validator($data);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if($request->hasFile('song')){
            $data['song'] = $this->saveSong($request, $data['name']);
            $mp3 = new \MP3File('songs/'.$data['song']);
            $duration = $mp3->getDurationEstimate();
        }
        if($request->hasFile('photo')){
            $data['photo'] = $this->savePhoto($request, $data['name']);
        }
        $song = new Song();
        $song->fill([
            'name' => $data['name'], 'song' => $data['song'], 'photo' => $data['photo'], 'artist_id' => $data['artist'],
            'genre_id' => $data['genre'], 'album_id' => $data['album'], 'duration' => $duration, 'rate' => $data['rate'],
        ]);
        if($song->save()){
            return redirect()->route('songs');
        }
    }
    
    public function saveSong($request, $name) {
        $file = $request->file('song');
        $songName = $name.'.'.$file->getClientOriginalExtension();
        $file->move(public_path().'/songs', $songName);
        return $songName;
    }
    
    public function savePhoto($request, $name) {
        $file = $request->file('photo');
        $photoName = $name.'.'.$file->extension();
        $file->move(public_path().'/photo/songs', $photoName);
        return $photoName;
    }
    
    public function showEdit($id){
        $title = 'Song Editor';
        $song = Song::find($id);
        $genres = Genre::select('name', 'id')->get();
        $artists = Artist::select('name', 'id')->get();
        $albums = Album::select('name', 'id')->get();
        if(view()->exists('admin.songEdit')){
            return view('admin.songEdit', ['title' => $title, 'song' => $song, 'genres' => $genres, 'artists' => $artists, 'albums' => $albums]);
        }
    }
    
    public function getDuration($song){
        $mp3 = new \MP3File('songs/'.$song);
        $duration = $mp3->getDurationEstimate();
        return $duration;
    }
    
    public function edit(Request $request, $id) {
        $data = $request->all();
        $validator = $this->validator($data);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if($request->hasFile('song')){
            $data['song'] = $this->saveSong($request, $data['name']);
            $duration = $this->getDuration($data['song']);
        }
        
        if($request->hasFile('photo')){
            $data['photo'] = $this->savePhoto($request, $data['name']);
        }
        $song = Song::find($id);
         $song->fill([
            'name' => $data['name'], 'song' => $data['song'], 'photo' => $data['photo'], 'artist_id' => $data['artist'],
            'genre_id' => $data['genre'], 'album_id' => $data['album'], 'duration' => $duration, 'rate' => $data['rate'],
        ]);
        if($song->update()){
            return redirect()->route('songs');
        }
    }
}
