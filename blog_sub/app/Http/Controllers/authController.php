<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class authController extends Controller
{
    //

    public function login(){
        return view('admin.login');
    }
    public function login2(Request $r){
        // return view('admin.login');

        if(Auth::attempt(['email'=>$r->email,'password'=>$r->password])){
            return redirect('');
        }
        else{
            return back()->with('error','Email or Password is Wrong');
        }
    }
}
