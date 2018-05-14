<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    public function __construct() {
        
    }
    
    public function show(){
        $title = 'Users Table';
        $users = User::all();
//        dd($users);
        return view('admin.users', ['title' => $title, 'users' => $users]);
    }
    
    public function delete(Request $request, $id){
        if($request->isMethod('POST')){
            $user = User::find($id);
            if($user->delete()){
                return response()->json(array('result' => 'User is successfully deleted'), 200);
            }
            return response()->json(array('result' => 'failure'), 200);
        }
        
        return "Hello";
    }
    
   
}
