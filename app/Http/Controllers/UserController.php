<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
//use Illuminate\Http\Request;
use App\User;


class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
            if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or password not matched";
        }
        else{
            $req->Session()->put('user',$user);
            return redirect('/');
        }
    }
    function register(Request $req)
    {
        //return $req->input();
        $user= new User;
        $user->name=$req->name;
        $user->email=$req->email;
        $user->password=Hash::make($req->password);
        $user->save();
         return redirect('/');
    }
}
