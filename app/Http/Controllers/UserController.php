<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    //
    function  login(Request $req){
        $user= User::where(['email'=>$req->email])->first();
        // return $user->password;
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or password is not matched";
        }else {
            $req->session()->put('user',$user);
            return redirect("/");
        }
        // return $req->input();
    }


    function register(Request $req)
    {
        $user = new User;
        $user->name=$req->username;
        $user->email=$req->email;
        
        $user->password=Hash::make($req->password);
        $user->save();

        return redirect('/login');
    }
}
