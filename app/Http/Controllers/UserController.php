<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function login(Request $request){
        $user = User::where('email', $request->email)->first();

        if(!$user || !Hash::check($request->password, $user->password)){
            return "Username or Password is incorrect";
        }
        else{
            $request->session()->put('user', $user);
            return redirect('/');
        }


    }

    public function logout(){
        Session::forget('user');
        return redirect('/login');
    }
}
