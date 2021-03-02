<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class Login extends Controller
{
    //
    public function login()
    {
        return view('login');
    }
    public function verify(LoginRequest $req){
        
        $user = DB::table('users')
                        ->where('password', $req->password)
                        ->where('email', $req->email)
                        ->get();



       
        if(count($user)>0){
            

            $req->session()->put('email', $req->email);
            return redirect('/home');
        }else{

            
            return redirect('/login');
        }
    }
}
