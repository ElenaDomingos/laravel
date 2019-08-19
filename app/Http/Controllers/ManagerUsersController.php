<?php

namespace App\Http\Controllers;
use Auth;
use App\User;
use Illuminate\Http\Request;


class ManagerUsersController extends Controller
{

    public function __construct(){
   
        //Can't access this class if the user is not Admin

        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
           if( Auth::user()->role === 1 ){
            return redirect('/home');
        }    
            return $next($request);
        });        
    }

    public function index() {
      
        $users = User::all();
        return view('ManagerUsers', ['users' => $users]);    

    }

    public function setAdmin(Request $request){
        $this->validate($request, [
            'name' => 'required|numeric',
        
        ]);    
        $id = request('name');

        $user = User::find($id);
        $user->role = 0;
        $user->save();
        return redirect('/users');
    }

    public function setUser(Request $request) {
        $this->validate($request, [
            'name' => 'required|numeric',
        
        ]);    
        $id = request('name');

        $user = User::find($id);
        $user->role = 1;
        $user->save();
        return redirect('/users');
        
    }
}
