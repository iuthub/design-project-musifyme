<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Artist;
use App\Genre;
use DB;
use Validator;

class ArtistsController extends Controller
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
            'biography' => 'required',
            'photo' => 'required',
            'quote' => 'required',
            'genre' => 'required',
        ], $this->messages);
         
         return $validator;
    }
    
    public function show(){
        $title = "Artists Table";        
        $artists = Artist::all();

        if(view()->exists('admin.artists')){
            return view('admin.artists', ['artists' => $artists, 'title' => $title]);
        }
    }
    
    public function delete(Request $request, $id){
        if($request->isMethod('POST')){
            $artist = Artist::find($id);
            if($artist->delete()){
                return response()->json(array('result' => 'Artist successfully deleted'), 200);
            }
            return response()->json(array('result' => 'failure'), 200);
        }
        return 'Hello';
    }
    
    public function showEdit($id){
        $title = 'Artist Editor';
        $artist = Artist::find($id);
        $genres = Genre::select('name', 'id')->get();
         if(view()->exists('admin.artistEdit')){
            return view('admin.artistEdit', ['title' => $title, 'artist' => $artist, 'genres' => $genres]);
        }
    }
    
    public function edit(Request $request, $id){
        $data = $request->all();
        $validator = $this->validator($data);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $data['photo'] = $data["name"].'.'.$file->extension();
            $file->move(public_path().'/photo/artists', $data['photo']);
        }
        $artist = Artist::find($id);
        $artist->genres()->sync($data['genre']);
        $artist->fill($data);
        if($artist->update()){
            return redirect()->route('artists');
        }
    }
    
    public function showAdd(){
        $title = 'Add Artist';
        $genres = Genre::select('name', 'id')->get();
        if(view()->exists('admin.artistAdd')){
            return view('admin.artistAdd', ['title' => $title, 'genres' => $genres]);
        }
    }
    
    public function add(Request $request){
        $data = $request->all();
        $validator = $this->validator($data);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $data['photo'] = $data["name"].'.'.$file->extension();
            $file->move(public_path().'/photo/artists', $data['photo']);
        }
        $artist= new Artist();
        
        $artist->fill($data);
        if($artist->save()){
            $artist->genres()->attach($data['genre']);
            return redirect()->route('artists');
        }
    }
}
