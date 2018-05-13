<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use App\User;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
//        dd("You are in Admin Middleware");
        if(!($this->isAdmin(Auth::id()))){
            return redirect()->route('login');
        }
//        return redirect()->intended();
        return $next($request);
    }
    
    public function isAdmin($id){
        $user = User::select('email', 'password')->where('id', $id)->first();    
        if($user->email == 'admin@mail.ru'){
            return true;
        }
        return false;
    }
}
