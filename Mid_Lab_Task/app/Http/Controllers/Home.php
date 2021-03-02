<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Home extends Controller
{
    //

    public function home(Request $req){
        $all = All::where('email',$req->session()->get('email'));
        return view('home');
    }
}
