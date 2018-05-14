<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
use Validator;

class GenresController extends Controller
{
    public function __construct(){
        $this->messages = [
            'required' => 'Fill the field :attribute',
            'string' => 'Only letters are required in fieal :attribute',
        ];
    }
    
    public function show(){
        $title = "Genres Table";
        $genres = Genre::all();
        if(view()->exists('admin.genres')){
            return view('admin.genres', ['title' => $title, 'genres' => $genres]);
        }
    }
    
    public function delete(Request $request, $id){
        if($request->isMethod('POST')){
            $genre = Genre::find($id);
            if($genre->delete()){
                return response()->json(array('result' => 'Genre is successfully deleted'), 200);
            }
            return response()->json(array('result' => 'failure'), 200);
        }
        return 'Hello';
    }
    
    public function showEdit($id){
        $title = 'Genre Editor';
        $genre = Genre::find($id);
         if(view()->exists('admin.genreEdit')){
            return view('admin.genreEdit', ['title' => $title, 'genre' => $genre]);
        }
    }
    
    public function edit(Request $request, $id){
        $data = $request->all();
        
        $validator = $this->validator($data);
        if($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        if($request->hasFile('photo')){
            $file = $request->file('photo');
            $data['photo'] = $data['name'].'.'.$file->extension();
            $file->move(public_path().'/photo/genres', $data['photo']);
        }
        $genre = Genre::find($id);
        $genre->fill($data);
        if($genre->update()){
            return redirect()->route('genres');
        }
    }
    
    public function validator($data){
         $validator = Validator::make($data, [
            'name' => 'required|string',
            'description' => 'required',
            'photo' => 'required',
        ], $this->messages);
         
         return $validator;
    }
    
    public function showAdd(){
        $title = 'Add Genre';
        if(view()->exists('admin.genreAdd')){
            return view('admin.genreAdd', ['title' => $title]);
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
            $data['photo'] = $data['name'].'.'.$file->extension();
            $file->move(public_path().'/photo/genres', $data['photo']);
        }
        $genre = new Genre();
        $genre->fill($data);
        if($genre->save()){
            return redirect()->route('genres');
        }
    }
}
