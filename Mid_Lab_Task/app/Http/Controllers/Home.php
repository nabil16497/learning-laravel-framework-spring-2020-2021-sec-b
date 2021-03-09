<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class Home extends Controller
{
    //

    public function home(Request $req){
       
        $user = User::where('email',$req->session()->get('email'))->first();
        return view('home')->with('user',$user);
    }
}
