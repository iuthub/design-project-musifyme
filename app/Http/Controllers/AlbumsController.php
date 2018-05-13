<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Album;
use App\Artist;
use Validator;

class AlbumsController extends Controller
{
    public function __construct(){
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
        ], $this->messages);
         
         return $validator;
    }
    
    public function show() {
        $title = 'Albums Table';
        $albums = Album::all();
        $genres = $this->getGenres($albums);

        if(view()->exists('admin.albums')){
            return view('admin.albums', ['title' => $title, 'albums' => $albums, 'genres' => $genres]);
        }
    }
    
    function showPage(){
        $albums = Album::all();
        
        if(view()->exists('music.albums')){
            return view('music.albums', ['albums' => $albums]);
        }
    }

    
    public function getGenres($albums){
        $genres = array();
        foreach ($albums as $i => $album){
            $genres[$i] = array();
            foreach ($album->songs as $song){
                if(!in_array($song->genre->name, $genres[$i])){
                    $genres[$i][] = $song->genre->name;
                }
            }
        }
        return $genres;
    }
    
     public function delete(Request $request, $id){
        if($request->isMethod('POST')){
            $album = Album::find($id);
            if($album->delete()){
                return response()->json(array('result' => 'Album successfully deleted'), 200);
            }
            return response()->json(array('result' => 'failure'), 200);
        }
        return 'Hello';
    }
    
    public function showEdit($id){
        $title = 'Album Editor';
        $album = Album::find($id);
        $artists = Artist::all();
        if(view()->exists('admin.albumEdit')){
            return view('admin.albumEdit', ['title' => $title, 'album' => $album, 'artists' => $artists]);
        }
        return 'No Ready...';
    }
    
    public function edit(Request $request, $id){
        $data = $request->all();
        $validator = $this->validator($data);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if($request->hasFile('photo')){
            $data['photo'] = $this->savePhoto($request, $data['name']);
        }
        $album = Album::find($id);
        $album->fill($data);
        $album->artist_id = $data['artist'];
         
        if($album->update()){
            return redirect()->route('albums');
        }
        return 'No Ready...';
    }
    
    public function showAdd(){
        $title = 'Add Album';
        $artists = Artist::select('name', 'id')->get();
        if(view()->exists('admin.albumAdd')){
            return view('admin.albumAdd', ['title' => $title, 'artists' => $artists]);
        }
    }
    
    public function add(Request $request) {
        $data = $request->all();
        $validator = $this->validator($data);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if($request->hasFile('photo')){
            $data['photo'] = $this->savePhoto($request, $data['name']);
        }
        $album = new Album();
        $album->fill($data);
        $album->artist_id = $data['artist'];
         
        if($album->save()){
            return redirect()->route('albums');
        }
    }
    
    public function savePhoto($request, $name) {
        $file = $request->file('photo');
        $photoName = $name.'.'.$file->extension();
        $file->move(public_path().'/photo/albums', $photoName);
        return $photoName;
    }
}
