<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UsersController extends Controller
{
    public function getLogin(){
    	return view('users.login');
    }

    public function postRegister(Request $request){
    	// $this->validate($request,[
    	// 	'name' => 'string|max:255',
    	// 	'email'=>'string|email|unique:users,email',
     //        'password'=>'min:6|confirmed',
    	// ]);
    	$user = new User;
    	$user->name = $request->name;
    	$user->email = $request->email;
    	$user->password = Hash::make($request->password);
    	$user->admin = 0;
    	$user->save();
    	return redirect()->route('home.getLogin')->with('message','Registered Success !');
    }

    public function postLogin(Request $request){
    	$user = $request->all();
    	if(Auth::attempt(['email'=>$user['email'],'password'=>$user['password']])){
    		return redirect()->route('home');
    	}else{
    		return redirect()->route('home.getLogin')->with('message1','Login Fail');
    	}
    }

    public function getLogout(){
    	Auth::logout();
    	return redirect()->route('home');
    }
}
